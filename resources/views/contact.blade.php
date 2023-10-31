@extends('layouts.main')
@section('contact')
<div class="footer">
    @include('sidebar') {{-- Include the sidebar --}}

    <div class="contact">
        <div class="contact-us">
            <p>CONTACT US</p> {{-- Display a section title for contact information --}}
        </div>

        <div class="costomer-info">
            <div class="costomer-service">
                <p>Customer Service: 91 7508115758</p> {{-- Display contact information --}}
                <p>Ludhiana, Punjab, INDIA</p>
                <p>Yorex Infotec.</p>
            </div>
            <hr class="hr">
            <div class="info">
                <div class="required-info">
                    <h4>Contact Us</h4> {{-- Display a heading for contact information --}}
                    <p>Have a question? We have 24x7 Customer Service.</p>
                    <p>Before you contact us, skim through our self-serve options and Frequently Asked Questions for quicker answers.</p>
                    <p>Want to know more about the status of orders?</p>
                    <p>Login to view your order.</p>
                </div>
            </div>
            <div class="border">
                <div class="border-1">
                    <div class="border-2">
                        <p>Contact Us</p> {{-- Display a heading for the contact form --}}
                    </div>
                    <div class="requir-info">
                        <span>*Required information</span> {{-- Indicate required fields --}}
                    </div>
                    <div class="input-info">
                        <div class="input-information">
                            <form method="post" action="{{ route('contact.us') }}">
                                {{ csrf_field() }}
                                <table class="form">
                                    <tr>
                                        <td><p>Full Name*</p></td>
                                        <td><input type="text" name="fn" required></td> {{-- Input for full name --}}
                                    </tr>
                                    <tr>
                                        <td><p>E-mail Address</p></td>
                                        <td><input type="email" name="ea" required></td> {{-- Input for email address --}}
                                    </tr>
                                    <tr>
                                        <td><p>Message</p></td>
                                        <td><textarea name="me" required></textarea></td> {{-- Text area for the message --}}
                                    </tr>
                                    <tr>
                                        <td><input type="submit" value="Save" name="save"></td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="snd-btn">
                <button>Send Now</button> {{-- Display a "Send Now" button --}}
            </div>
        </div>
    </div>
</div>
@endsection
