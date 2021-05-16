@extends('layouts.email')

@section('content')

<div class="col num8" style="display: table-cell; vertical-align: top; min-width: 320px; max-width: 600px;">
<div style="width:100% !important;">
<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">
<div style="font-size:16px;text-align:left;">
    <div class="email-header" style="padding:20px">
        <h1 class="email-text-1" style="margin-bottom:30px;font-size:23px;color: #707070;font-weight: 600;text-align:center">Your message has been received</h1>
        <p class="email-text-2" style="margin-bottom:10px;color: #707070;font-size:16px;text-align:left;line-height: 35px;">Hello {{ $content['name'] }},</p>
        <p class="email-text-2" style="margin-bottom:40px;color: #707070;font-size:16px;text-align:left;line-height: 35px;">
        {{ $content['message'] }}
        </p>

        </div>
    </div>
</div>
</div>
</div>
@endsection
