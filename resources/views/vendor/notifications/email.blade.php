{{-- <x-mail::message>

@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Hello!')
@endif
@endif


@foreach ($introLines as $line)
{{ $line }}

@endforeach


@isset($actionText)
<?php
    $color = match ($level) {
        'success', 'error' => $level,
        default => 'primary',
    };
?>
<x-mail::button :url="$actionUrl" :color="$color">
{{ $actionText }}
</x-mail::button>
@endisset

@foreach ($outroLines as $line)
{{ $line }}

@endforeach

@if (! empty($salutation))
{{ $salutation }}
@else
@lang('Regards'),<br>
{{ config('app.name') }}
@endif

@isset($actionText)
<x-slot:subcopy>
@lang(
    "If you're having trouble clicking the \":actionText\" button, copy and paste the URL below\n".
    'into your web browser:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
</x-slot:subcopy>
@endisset
</x-mail::message> --}}
<x-mail::message>
<h4> Chào bạn! Mời bạn nhắp vào nút bên dưới để xác thực email của mình</h4>
<x-mail::button :url="$actionUrl" :color="'primary'"> Xác thực email </x-mail::button>
<p>Nếu bạn không có đăng ký tài khoản, vui lòng bỏ qua thư này</p>
<p>Nếu có vấn đề khi nhắp nút Xác thực email thì nhắp link dưới đây nhé : <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
</p>
</x-mail::message>

