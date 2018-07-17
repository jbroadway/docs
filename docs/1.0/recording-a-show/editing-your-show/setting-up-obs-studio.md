# Setting up OBS Studio

Flipside uses OBS Studio to record the non-VR version of your show.  

<div class="video-wrapper"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/LCYsQ__nVGo" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>

**To set up OBS Studio, follow the steps below:**

1. Download and install OBS Studio
   * Go to [OBS Studio](https://obsproject.com/download), download the latest version of the program and install it.
   * Make sure that the [obs-websocket plugin](https://obsproject.com/forum/resources/obs-websocket-remote-control-of-obs-studio-made-easy.466/) is installed with authentication disabled.
2. Launch Flipside
3. Launch OBS Studio
4. Add your video source to OBS
   * Under the Sources section, click **+** and select **Window Capture**. This will bring up the window capture pane.
   * Make sure **Create new** is selected and keep **Make source visible** checked.
   * Once the source is added, double click the source in the **Sources** section to bring up the properties pane. In the properties pane, select **Flipside** in the **Window** dropdown menu and make sure **Capture Cursor** is unchecked.
5. Add your audio source to OBS Studio
   * Ensure you have added audio sources for both **Mix/Aux** and **Desktop Audio**. **Mix/Aux** captures your voice in Flipside and **Desktop Audio** captures the rest of the sounds in Flipside.
6. Adjust the sync offset to 160ms
   * Under the **Edit** menu, select **Advanced Audio Properties** and enter **160** into the **Sync Offset (ms)** field for the **Mix/Aux** audio source.
7. Set the window capture area
   * In OBS Studio, you will see all of the Flipside interface in the window capture area. Move/resize this view to only capture the show and not the Live edit elements.
8. Connect Flipside and OBS Studio
   * In the Flipside camera switcher interface on the desktop, click **Connect** to establish a connection between Flipside and OBS Studio. You should see the connection status change to say it has connected.
9. Check your Windows audio settings
   * If you don’t see the audio volume changing in the OBS mixer area, you may need to make sure that Windows has the correct audio input source enabled. To see or change this setting, click on the audio icon in the lower right corner of the Windows desktop. Click on the audio input source name to select a different input source.
10. Check OBS audio settings
   * If you still don’t see the audio volume changing in the OBS mixer area, **click on the gear icon next to the audio source** in the OBS mixer area and select **Properties**. Try choosing the appropriate audio device in the **Device** selector.

---

Next: [[: Live Edit mode ]]
