@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://homedefender.net/frontend/my-img/logo/logo-1.png" class="logo" alt="Laravel Logo"
                    style="height: auto" width="200px;">
            @else
                {{ $slot }}
            @endif
        </a>
    </td>
</tr>
