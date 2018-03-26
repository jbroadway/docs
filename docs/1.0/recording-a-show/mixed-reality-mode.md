# Mixed Reality mode

--- Platform: Oculus Rift ---

> Note: Mixed Reality mode is only supported on the HTC Vive at this time.

--- Platform: HTC Vive ---

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

Once you've run through the VIVR setup, launch the LIV Client app and go to _Camera > Edit > Calibration_ and paste the contents of the **externalcamera.cfg** file that VIVR generated. This will ensure that the camera calibration data is carried over into the next steps.

## Starting Mixed Reality mode

Once you have your camera calibration completed, launch the LIV Client app through Steam. 

...

## Re-calibrating your other Vive Trackers

If you have additional Vive Trackers that you want to use to track your lower body, follow the [[ Characters / full-body tracking ]] instructions after you've entered Mixed Reality mode, so that Flipside Studio knows to exclude the camera tracker from the list of body trackers.

---

Next: [[ Handheld camera ]]
