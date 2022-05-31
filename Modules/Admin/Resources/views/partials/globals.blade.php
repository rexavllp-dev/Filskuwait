<script>
    window.FilsKuwait = {
        version: '{{ filskuwait_version() }}',
        csrfToken: '{{ csrf_token() }}',
        baseUrl: '{{ url('/') }}',
        rtl: {{ is_rtl() ? 'true' : 'false' }},
        langs: {},
        data: {},
        errors: {},
        selectize: [],
    };

    FilsKuwait.langs['admin::admin.buttons.delete'] = '{{ trans('admin::admin.buttons.delete') }}';
    FilsKuwait.langs['media::media.file_manager.title'] = '{{ trans('media::media.file_manager.title') }}';
    FilsKuwait.langs['media::messages.image_has_been_added'] = '{{ trans('media::messages.image_has_been_added') }}';
</script>

@stack('globals')

@routes
