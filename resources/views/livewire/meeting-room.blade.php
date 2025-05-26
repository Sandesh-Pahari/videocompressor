<div
    x-data="{
        initJitsi() {
            const domain = '8x8.vc';
            const options = {
                roomName: '{{ config('services.jaas.app_id') }}/{{ $roomName }}',
                width: '100%',
                height: 600,
                parentNode: document.getElementById('meet'),
                jwt: '{{ $jwtToken }}',
                userInfo: { displayName: @js($userName) },
                configOverwrite: {},
                interfaceConfigOverwrite: {},
                onload: () => console.log('Jitsi loaded')
            };

            new JitsiMeetExternalAPI(domain, options);
        }
    }"
    x-init="initJitsi()"
    class="w-full"
>
    <div id="meet" class="w-full h-[600px] rounded-lg shadow"></div>

    <script src="https://8x8.vc/external_api.js"></script>
</div>
