<?php

use Faker\Factory;
use PHPUnit\Framework\TestCase;
use App\Http\Requests\SaveProductRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ValidationRulesTest extends TestCase
{
    use RefreshDatabase;

    private $rules;

    /** @var \Illuminate\Validation\Validator */
    private $validator;

    public function setUp(): void
    {
        parent::setUp();

        $this->validator = app()->get('validator');

        $this->rules = (new ValidationRulesTest())->rules();
    }

    public function validationProvider()
    {
        /* WithFaker trait doesn't work in the dataProvider */
        $faker = Factory::create( Factory::DEFAULT_LOCALE);

        return [
            'request_should_fail_when_no_title_is_provided' => [
                'passed' => false,
                'data' => [
                    'price' => $faker->numberBetween(1, 50)
                ]
            ],
            'request_should_fail_when_no_price_is_provided' => [
                'passed' => false,
                'data' => [
                    'title' => $faker->word()
                ]
            ],
            'request_should_fail_when_title_has_more_than_50_characters' => [
                'passed' => false,
                'data' => [
                    'title' => $faker->paragraph()
                ]
            ],
            'request_should_pass_when_data_is_provided' => [
                'passed' => true,
                'data' => [
                    'title' => $faker->word(),
                    'price' => $faker->numberBetween(1, 50)
                ]
            ]
        ];
    }

    /**
     * @test
     * @dataProvider validationProvider
     * @param bool $shouldPass
     * @param array $mockedRequestData
     */
    public function validation_results_as_expected($shouldPass, $mockedRequestData)
    {
        $this->assertEquals(
            $shouldPass,
            $this->validate($mockedRequestData)
        );
    }

    protected function validate($mockedRequestData)
    {
        return $this->validator
            ->make($mockedRequestData, $this->rules)
            ->passes();
    }
}
