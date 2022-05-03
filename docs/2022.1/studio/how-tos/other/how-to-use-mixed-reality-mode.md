# How to use Mixed Reality mode

--- Platform: Quest ---

# TODO

--- Platform: Oculus ---

> Note: Mixed Reality mode is only supported on the Quest and HTC Vive at this time.

--- Platform: SteamVR ---

Mixed Reality mode lets you incorporate green screened actors and other real world elements into your video output. It does this by aligning a tracker with a real-world camera, so that footage from both sources can be combined.

## Requirements

Equipment:

* [HTC Vive Tracker](https://www.vive.com/us/vive-tracker) or equivalent
* Green screen
* Camera

Software:

* [LIV Client](http://store.steampowered.com/app/755540/LIV/)

## Camera tracker calibration

**Step 1.** Attach the Vive Tracker to your camera.

**Step 2.** Use the LIV app to calibrate the position and rotation offset between the Vive Tracker and your camera. This helps align your real and virtual cameras.

**Step 3.** Copy the **externalcamera.cfg** file that was generated in step 2 into your **SteamLibrary/steamapps/common/Flipside** folder so that Flipside Studio can read your camera configuration data.

**Step 4.** (Optional) Enter the contents of this file into the LIV Client app under **Camera > Edit > Calibration**.

## Starting Mixed Reality mode

**Step 1.** Launch the LIV Client app through Steam.

**Step 2.** Select Flipside Studio from the list of available applications in the LIV Client, which will also start Flipside Studio.

**Step 3.** Take your headset off and look at Flipside Studio's user switcher interface on your desktop.

**Step 4.** Click on the settings icon along the bottom of the screen. It looks like a little gear icon.

**Step 5.** Click on the **Input** tab.

**Step 6.** Click on the **Connect Trackers** button.

# TODO: SettingsWindow.ConnectTrackersPlayerInput() has not been implemented yet!

Next, you'll be asked to select which Vive Tracker is attached to your camera. They will appear as color-coded trackers in the scene. Just press the button that matches the color of the tracker attached to your camera.

You should now be in Mixed Reality mode. You can exit this mode at any time by pressing the **Exit** button. You can also choose to show or hide your character in this mode, all on the underside of the **Recordings** menu.

## Re-calibrating your other Vive Trackers

If you have additional Vive Trackers that you want to use to track your lower body, follow [[: how to use Vive trackers for full body tracking]] _after you've entered Mixed Reality mode_ so that Flipside Studio knows to exclude the camera tracker from the list of body trackers.

## Troubleshooting tips

If you don't see the **Mixed Reality** button on the underside of the Recordings palette, double-check the following things:

- Make sure your Vive Tracker is turned on before launching Flipside Studio.
- Make sure the **externalcamera.cfg** file is in the same folder as the **Flipside - HTC Vive.exe** file in your Steam library.

--- /Platform ---

---

Back: [[Studio / How tos]]
