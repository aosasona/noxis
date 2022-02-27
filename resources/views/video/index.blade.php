@extends('layouts.chat')

@section('content')
    <div id="user">{{ $video_id }}</div>
    <div id="meetId">{{ $meetId }}</div>

    <title>{{ ucFirst($client) }} | Video Call</title>

    <script>
        var script = document.createElement("script");
        script.type = "text/javascript";

        script.addEventListener("load", function(event) {
            const meeting = new VideoSDKMeeting();
            var userFetched = document.getElementById("user").innerText;
            var meetId = document.getElementById("meetId").innerText;

            const config = {
                name: userFetched,
                apiKey: "6ee4eb88-6b1e-4ce9-9dff-94cb6cc98f89",
                meetingId: meetId,
                maxResolution: "hd",
                screenShareEnabled: true,
                chatEnabled: false,
                raiseHandEnabled: false,
                recordingEnabled: false,

                redirectOnLeave: "https://noxis.app/chats",

                micEnabled: true,
                webcamEnabled: true,
                participantCanToggleSelfWebcam: true,
                participantCanToggleSelfMic: true,

                brandingEnabled: true,
                brandLogoURL: "https://ranch-beta.herokuapp.com/img/logo.svg",
                brandName: "Noxis",
                poweredBy: false,

                joinScreen: {
                    visible: false, // Show the join screen ?
                    title: meetId, // Meeting title
                    meetingUrl: window.location.href, // Meeting joining url
                },

                permissions: {
                    askToJoin: false,
                    toggleParticipantWebcam: false,
                    toggleParticipantMic: false,
                    removeParticipant: false,
                },
            };
            meeting.init(config);
        });

        script.src = "https://sdk.videosdk.live/rtc-js-prebuilt/0.1.29/rtc-js-prebuilt.js";

        document.getElementsByTagName("head")[0].appendChild(script);
    </script>
@endsection
