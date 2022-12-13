# How to live stream from Flipside Studio

Here are the steps to live stream from Flipside Studio.

--- Platform: Quest ---

## Requirements

Live streaming requires a PC with the following software installed and configured to stream to your platform(s) of choice. Follow the steps in the one-time setup for each app and from then on you can skip straight to the [live streaming steps](#live-streaming).

- [Flipside Broadcaster](https://www.flipsidexr.com/flipside-broadcaster)
- [OBS Studio](https://obsproject.com/)

## One-time setup

### Flipside Broadcaster setup

**Step 1.** Installing Flipside Broadcaster on your PC.

**Step 2.** Launch Flipside Broadcaster and click on the **Settings** icon in the top right of the room code window.

**Step 3.** Click **Install** to install the Flipside Broadcaster virtual camera. Click **OK** when prompted by the installer.

**Step 4.** Once the install process has finished, click **Start** to start the virtual camera.

### OBS Studio setup

**Step 1.** Install OBS Studio on your PC.

**Step 2.** Click on the **+** icon in the **Sources** panel and choose **Video Capture Device** to create a new video capture source. Name it **Flipside Broadcaster** then click **OK**.

**Step 3.** Select **Flipside Broadcaster** from the list of devices then click **OK** again.

**Step 4.** Adjust the volume of the **Desktop Audio** source in the **Audio Mixer** section to ensure voices and audio coming from Flipside Broadcaster will be heard in OBS.

## Live streaming

After completing the one-time steps above, here are the steps you can use to start a new live stream from Flipside Studio.

**Step 1.** Press the menu button on either controller and choose **Camera Switcher** from the main menu.

**Step 2.** Press the **Start Cast** button in the bottom left corner of the camera switcher. A popup window will appear with a room code to enter into Flipside Broadcaster to connect.

**Step 3.** Launch Flipside Broadcaster on your PC and enter the room code.

**Step 4.** Enter the room code you were given in step 2 and click **Connect**.

**Step 5.** Launch OBS Studio on your PC and click **Start Streaming** to begin streaming your Flipside Broadcaster output to the world.

**Step 6.** When you're done live streaming, click **Stop Cast** on the camera switcher in Flipside Studio to stop broadcasting to Flipside Broadcaster and click **Stop Streaming** in OBS to stop streaming to the world.

--- Platform: Oculus ---

## One-time setup

**Step 1.** Install [OBS Studio](https://obsproject.com/).

**Step 2.** Install the [obs-websocket plugin](https://obsproject.com/forum/resources/obs-websocket-remote-control-obs-studio-from-websockets.466/).

**Step 3.** Launch OBS Studio and Flipside Studio.

**Step 4.** Under the **Sources** section, click the **+** icon and select **Window Capture**. Make sure **Create new** is selected and keep **Make source visible** checked.

Once the source is added, double-click it in the **Sources** section to bring up the Properties pane. In the Properties pane, select **Flipside Studio** in the **Window** dropdown menu. Make sure **Capture Cursor** is unchecked.

**Step 5.** Under **Audio Mixer**, add audio sources for both **Mic/Aux** and **Desktop Audio** to capture both your own voice and sounds coming from Flipside Studio.

Click on the gear icon for the **Mic/Aux** audio source and enter **120** into the **Sync Offset (ms)** field. Note that if you use the obs-websocket plugin and connect Flipside Studio to OBS, this will be set for you automatically.

**Step 6.** Adjust the window capture area so that Flipside Studio's camera output properly fills the window capture area.

## Live streaming

After completing the one-time steps above, here are the steps you can use to start a new live stream from Flipside Studio.

**Step 1.** Press the menu button on either controller and choose **Camera Switcher** from the main menu.

**Step 2.** Press the menu button again and choose **Camera** to add a camera to your set.

**Step 3.** On the camera switcher, click **Connect** to connect to OBS.

**Step 4.** On the camera switcher, click **Stream** to start live streaming.

**Step 5.** When you're done live streaming, click **Stop Streaming** on the camera switcher.

--- Platform: SteamVR ---

## One-time setup

**Step 1.** Install [OBS Studio](https://obsproject.com/).

**Step 2.** Install the [obs-websocket plugin](https://obsproject.com/forum/resources/obs-websocket-remote-control-obs-studio-from-websockets.466/).

**Step 3.** Launch OBS Studio and Flipside Studio.

**Step 4.** Under the **Sources** section, click the **+** icon and select **Window Capture**. Make sure **Create new** is selected and keep **Make source visible** checked.

Once the source is added, double-click it in the **Sources** section to bring up the Properties pane. In the Properties pane, select **Flipside Studio** in the **Window** dropdown menu. Make sure **Capture Cursor** is unchecked.

**Step 5.** Under **Audio Mixer**, add audio sources for both **Mic/Aux** and **Desktop Audio** to capture both your own voice and sounds coming from Flipside Studio.

Click on the gear icon for the **Mic/Aux** audio source and enter **120** into the **Sync Offset (ms)** field. Note that if you use the obs-websocket plugin and connect Flipside Studio to OBS, this will be set for you automatically.

**Step 6.** Adjust the window capture area so that Flipside Studio's camera output properly fills the window capture area.

## Live streaming

**Step 1.** Press the menu button on either controller and choose **Camera Switcher** from the main menu.

**Step 2.** Press the menu button again and choose **Camera** to add a camera to your set.

**Step 3.** On the camera switcher, click **Connect** to connect to OBS.

**Step 4.** On the camera switcher, click **Stream** to start live streaming.

**Step 5.** When you're done live streaming, click **Stop Streaming** on the camera switcher.

--- /Platform ---

---

Back: [[Studio / How tos]]
