<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use AdditionalAssertions;
use App\Http\Requests\SaveContactRequest;

class ContactValidation extends TestCase
{

    /** @test */
    public function it_verifies_validation_rules()
    {
        $formRequest = new SaveContactRequest();
        $this->assertEquals([
            'email' => ['required','regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'],
            'document'  => 'mimes:pdf,xlsx,csv',
            'message'   => 'required',
            'name'      => 'required'
        ], $formRequest->rules());

        $this->assertTrue($formRequest->passes());
    }
}
