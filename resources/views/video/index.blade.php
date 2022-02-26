<script>
    var script = document.createElement("script");
    script.type = "text/javascript";
  
    script.addEventListener("load", function (event) {
      const meeting = new VideoSDKMeeting();
      
      const config = {
        name: "Username",
        apiKey: "6ee4eb88-6b1e-4ce9-9dff-94cb6cc98f89", 
        meetingId: "NOXIS_GROUP_CHAT", 
        
        redirectOnLeave: "https://www.videosdk.live/",
  
        micEnabled: true,
        webcamEnabled: true,
        participantCanToggleSelfWebcam: true,
        participantCanToggleSelfMic: true,
  
        joinScreen: {
          visible: true, // Show the join screen ?
          title: "Noxis Meet-Up", // Meeting title
          meetingUrl: window.location.href, // Meeting joining url
        },
      };
      meeting.init(config);
    });
  
    script.src = "https://sdk.videosdk.live/rtc-js-prebuilt/0.1.29/rtc-js-prebuilt.js";
  
    document.getElementsByTagName("head")[0].appendChild(script);
  
  </script>
  