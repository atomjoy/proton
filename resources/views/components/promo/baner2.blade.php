<div class="proton-baner-2">
    <div class="proton-full-width">

        <table align="left" width="33.333%" border="0" cellpadding="0" cellspacing="0" class="proton-baner2-item">
            <tr>
                <td align="center">
                    <img class="email-image-small" src="/images/icon-email.png" alt="Icon" width="40">                    
                </td>
            </tr>        
            <tr>
                <td align="center">                			
                    <a href="mailto: {{ $email ?? 'email@example.org' }}" target="_blank" style="color: #222; text-decoration: none; font-weight: 400"><span>{{ $email ?? 'email@example.org' }}</span></a>
                </td>
            </tr>     
        </table>

        <table align="left" width="33.333%" border="0" cellpadding="0" cellspacing="0" class="proton-baner2-item">
            <tr>
                <td align="center">
                    <img class="email-image-small" src="/images/icon-phone.png" alt="Icon" width="40">                    
                </td>
            </tr>        
            <tr>
                <td align="center">                			
                    <a href="tel: {{ $mobile ?? '+48 100 200 300' }}" target="_blank" style="color: #222; text-decoration: none; font-weight: 400"><span>{{ $mobile ?? '+48 100 200 300' }}</span></a>
                </td>
            </tr>
        </table>
        
        <table align="left" width="33.333%" border="0" cellpadding="0" cellspacing="0" class="proton-baner2-item">
            <tr>
                <td align="center">
                    <img class="email-image-small" src="/images/icon-cart.png" alt="Icon" width="40">                    
                </td>
            </tr>        
            <tr>
                <td align="center">                			
                    <a href="https://{{ $domain ?? 'example.org' }}" target="_blank" style="color: #222; text-decoration: none; font-weight: 400"><span>{{ $domain ?? 'example.org' }}</span></a>
                </td>
            </tr>
        </table>
    </div>
</div>

{{-- <div class="proton-baner-2">
    <div class="proton-full-width">
        <div class="proton-baner-33">
            <div class="proton-baner-33-item">
                <img class="email-image-small" src="/images/icon-email.png" alt="Icon" width="20">
                {{ $emai ?? 'email@example.org' }}
            </div>
        </div>

        <div class="proton-baner-33">
            <div class="proton-baner-33-item">
                <img class="email-image-small" src="/images/icon-phone.png" alt="Icon" width="20">
                {{ $mobile ?? '+48 100 200 300' }}
            </div>
        </div>

        <div class="proton-baner-33">
            <div class="proton-baner-33-item">
                <img class="email-image-small" src="/images/icon-cart.png" alt="Icon" width="20">
                {{ $domain ?? 'example.org' }}
            </div>
        </div>
    </div>
</div> --}}