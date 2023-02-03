# CameraElement

Unity cameras and Cinemachine virtual cameras will automatically be converted to camera positions in the
Flipside Studio camera switcher, making them a powerful way to setup custom shots or camera movements.

To preview your camera positions, press play in Unity then press the number keys (1, 2, 3, etc.) to switch
between camera positions. Press 0 to switch back to mirroring what you're seeing in VR.

Attaching a CameraElement to any Camera object in your scene lets you trigger Unity events on the following
interactions:

* **OnCameraActivated** - Do something when the camera is activated in the Flipside camera switcher.
* **OnCameraDeactivated** - Do something when the camera is deactivated in the Flipside camera switcher.

![CameraElement component](https://www.flipsidexr.com/files/docs/screenshots/camera-events.png)

These events let you do things like start a timed animation sequence as your show opening whenever you cut
to the associated camera position.

---

**Next:** [[Creator Tools / References / Custom components]]
