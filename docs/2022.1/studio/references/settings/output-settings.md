# Output settings

You can find the output settings by clicking on the gear icon on the [[studio / references / desktop interface]] and clicking on the **Output** tab.

This is what the output settings looks like:

![Output settings window](https://www.flipsidexr.com/files/docs/screenshots/output-settings.jpg)

Output settings include:

* **Bloom filter** - Enables or disables the [bloom filter](https://docs.unity3d.com/2019.1/Documentation/Manual/PostProcessing-Bloom.html). Bloom creates fringes of light extending from the borders of bright areas of an image, creating the illusion of light overwhelming the camera.
* **Ambient Occlusion filter** - Enables or disables [ambient occlusion](https://docs.unity3d.com/Manual/LightingBakedAmbientOcclusion.html). Ambient occlusion simulates soft shadows that occur in creases, holes, and surfaces that are close to each other and makes them appear darker.
* **Ambient Occlusion radius** - The radius of sample points in meters, which controls the extent of darkened areas. Set this to a lower value to improve performance when using ambient occlusion.
* **Light Pixel Count** - The maximum number of lights that can affect a given object at a time.

> Note: Each of the above settings has an impact on rendering performance and frame rate.

### OBS settings

* **OBS Host** - The host name to connect to OBS via the [obs-websocket plugin](https://obsproject.com/forum/resources/obs-websocket-remote-control-obs-studio-from-websockets.466/). Defaults to **localhost**.
* **OBS Port** - The port number to connect to OBS. Defaults to **4444**.
* **OBS Password** - An optional password to secure your connection to OBS. Make sure this matches the password you set in OBS.

### Output options

* **NDI Output** - Enables [NDI](https://ndi.tv/) which can be used to stream Flipside Studio video output over the network.
* **DirectShow Output** - Enables [DirectShow](https://docs.microsoft.com/en-us/windows/win32/directshow/introduction-to-directshow) output, which creates a Flipside Studio virtual camera that can be used as a video source in apps like Zoom.

---

Next: [[: Other settings]]
