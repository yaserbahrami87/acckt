<div>
    <div class='g-recaptcha {{ $hasError ? 'is-invalid' : ''}} d-flex ' data-sitekey='{{ $clientKey  }}'></div>
</div>
@push('scripts')
    <script src="//www.google.com/recaptcha/api.js"></script>
@endpush
