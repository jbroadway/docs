# Mixed Reality mode

--- Platform: Oculus ---

> Note: Mixed Reality mode is only supported on the HTC Vive at this time.

--- Platform: SteamVR ---

--- /Platform ---

Mixed Reality mode lets you incorporate green screened actors and other real world elements into your Flipside video output. It does this by aligning an HTC Vive Tracker with a real-world camera, so that footage from both sources can be combined.

## Requirements

Equipment:

* [HTC Vive Tracker](https://www.vive.com/us/vive-tracker)
* Green screen
* Camera

Software:

* [LIV VIVR](http://store.steampowered.com/app/625480/LIV_VIVR/)
* [LIV Client](http://store.steampowered.com/app/755540/LIV/)

## Camera tracker calibration

The first step is to attach the Vive Tracker to your camera. Once attached, you can use the LIV VIVR app to calibrate the position and rotation offset between the Vive Tracker and your camera. This helps align your real and virtual cameras.

Once you've run through the VIVR setup, VIVR will have generated an **externalcamera.cfg** file for you. Copy this file into your _SteamLibrary/steamapps/common/Flipside_ folder so that Flipside Studio can read your camera configuration data.

You can also enter the contents of this file into the LIV Client app under _Camera > Edit > Calibration_ as an optional step.

## Starting Mixed Reality mode

Once you have your camera calibration completed, launch the LIV Client app through Steam. Select Flipside Studio from the list of available applications in the LIV Client, and this will start Flipside Studio.

Once Flipside Studio has loaded, turn the palette over and you should see a **Mixed Reality Mode** button. Click that to begin Mixed Reality mode.

Next, you'll be asked to select which Vive Tracker is attached to your camera. They will appear as color-coded trackers in the scene. Just press the button that matches the color of the tracker attached to your camera.

You should now be in Mixed Reality mode. You can exit this mode at any time by pressing the **Exit** button. You can also choose to show or hide your character in this mode, all on the underside of the **Recordings** menu.

## Cameras in Mixed Reality mode

You'll see that your computer monitor output from Flipside is now split into four parts. On the left, you'll see your foreground and background output. On the top-right, you'll see a black and white layer that helps separate what should be included in the foreground and background output.

On the bottom-right, you'll see the regular Flipside Studio camera output. Using the number keys on your keyboard, you can use this to cut between the other cameras in Flipside to capture regular output alongside the mixed reality capture.

## Re-calibrating your other Vive Trackers

If you have additional Vive Trackers that you want to use to track your lower body, follow the [[ Characters / full-body tracking ]] instructions _after you've entered Mixed Reality mode_, so that Flipside Studio knows to exclude the camera tracker from the list of body trackers.

## Troubleshooting

If you don't see the **Mixed Reality** button on the underside of the Recordings palette, double-che
ck the following things:

1. Make sure your Vive Tracker is turned on before launching Flipside Studio.
2. Make sure the **externalcamera.cfg** file is in the same folder as the **Flipside - HTC Vive.exe** file in your Steam library.
3. Make sure you're on the **Recordings** palette, since the options change depending on the palette that's active.
