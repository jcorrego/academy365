<div style="text-align: center;font-family: sans-serif;line-height: 1;">
    <img src="{{ asset('img/logos/academy365.png') }}">
    <div class="text-saira title">Certificate of Completion</div>
    <div class="text-gray">THIS IS TO CERTIFY THAT</div>
    <div class="name text-saira">{{ auth()->user()->name }}</div>
    <div class="text-gray">has successfully completed the <strong>{{ $certificate->course->name }}</strong></div>
    <div class="description">{{ $certificate->course->description }}</div>
    <div style="font-size: 10px;">Issued on: {{ date('Y-m-d') }}
        <p style="font-family: SairaCondensed;">
            <br><span style="color:#7ABB98 !important;">by</span> <br> <br>
            Academy<span style="color:#E67BD3 !important;">3</span><span style="color:#509BF8 !important;">6</span><span style="color:#7ABB98 !important;">5</span>.net
        </p>
    </div>
    <div style="font-size: 10px; color:#6b7280;">Verify at help@academy365.net <br>
        Company has confirmed & verified the participation of this individual in the course.</div>
</div>
<style type="text/css">
    .border{
        border: 1px solid red;
    }
    .text-saira{
        font-family: SairaCondensed;
    }
    .text-gray{
        color: #666666;
    }
    .title{
        font-size:25px;
        padding-bottom: 10px;
    }
    .description{
        font-size:16px;
        padding: 15px 0;
        width: 400px;
        text-align: center;
        margin: 0 auto;
    }
    .name {
        font-size:45px; 
        color: #509BF8;
        line-height: 30px;
        padding: 10px 0;
    }
    @font-face {
        font-family: 'SairaCondensed';
        src: url('fonts/SairaCondensed-Bold.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }
</style>
