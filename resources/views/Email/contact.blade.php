@component('mail::message')
    <p style="border-collapse: collapse; table-layout: fixed; width: 1000px;">
        Hi,<br />
        New enquiry has been initiated on The Home Defender
        <br />
        Following are the contact enquiry details.
    </p>
    <table style="border-collapse: collapse; table-layout: fixed; width: 1000px;">
        <tbody>
            @if (isset($data['full_name']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Full Name</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['full_name'] !!}</b></td>
                </tr>
            @endif
            <tr>
                <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Email-Id</b></td>
                <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['email'] !!}</b></td>
            </tr>
            @if (isset($data['mobile']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Mobile</b></td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['mobile'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['subject']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Subject
                            Type</b>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['subject'] !!}</b></td>
                </tr>
            @endif
            @if (isset($data['message']))
                <tr>
                    <td style="border: 1px solid black; padding: 10px; width: 100px; overflow: hidden;"><b>Message</b>
                    </td>
                    <td style="border: 1px solid black; padding: 10px;"><b>&nbsp;&nbsp;{!! $data['message'] !!}</b></td>
                </tr>
            @endif
        </tbody>
    </table>
    <br />
    <br /><br />
    Thankyou,<br>
    Sales Team.<br />
    Home Defender<br />
@endcomponent
