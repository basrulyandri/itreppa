@extends('layouts.emails.master')

@section('content')
	<td valign="top" class="mcnTextContent" style="padding-top: 0;padding-right: 18px;padding-bottom: 9px;padding-left: 18px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%;word-break: break-word;color: #202020;font-family: Helvetica;font-size: 16px;line-height: 150%;text-align: left;">                       
                            
        <p>1 Aplikan bernama {{$aplikan->nama}} telah di share untuk kamu follow up oleh Kabag Marketing. </p>

        <p>Ayo jangan tunggu lama, segera di follow up ya.</p>

		<p><a href="{{route('auth.login')}}">Login disini</a></p>
        
    </td>
@stop