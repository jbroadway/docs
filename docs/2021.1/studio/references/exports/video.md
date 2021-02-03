# Video export

> Note: Exporting data is a paid feature. For more information, visit our [pricing page](/pricing).

Flipside Studio supports exporting video via the [[studio / references / desktop interface / video renderer]].

### File formats

Flipside Studio can export the following file formats:

* MP4 video
* PNG image sequence
* EXR image sequence
* WAV audio

EXR files are much larger while retaining more dynamic range.

### Output formats

Flipside Studio can export in the following formats:

* 360x180 (preview)
* 1280x720
* 1920x1080
* 2560x1440 (2K)
* 3840x2160 (4K)
* 1280x720 depth map
* 1920x1080 depth map
* 2560x1440 (2K) depth map
* 3840x2160 (4K) depth map

### Frame rates

Flipside Studio can export at the following frames per second:

* 24
* 25
* 30 (default)
* 50
* 60

### Anti-aliasing settings

Anti-aliasing can be enabled or disabled on renders. When enabled, it supports the following options:

* **Jitter spread** - Sets the diameter in which jitter samples are spread. Smaller values result in crisper but more aliased output. Larger values result in more stable but blurrier output.
* **Stationary blending** - Sets the blend coefficient for stationary fragments. This setting controls the percentage of history samples blended into final color for fragments with minimal active motion.
* **Motion blending** - Sets the blending coefficient for moving fragments. This setting controls the percentage of history samples blended into the final color for fragments with significant active motion.
* **Sharpness** - Sets the sharpness to alleviate the slight loss of details in high frequency regions which can be caused by temporal anti-aliasing.

### Video encoding settings

The video renderer supports the following video encoding settings:

* **Constant rate factor** - Controls output quality. Ranges from 0 to 51 where 0 is lossless and 51 is the lowest quality. 17 is said to be visually lossless and 23 is a high quality default option.
* **Encoding preset** - Determines the encoding speed to compression ratio. Set it to the slowest setting you have time for to maximize quality. Default is medium.
* **Encoding tune** - Optimizes the output quality for specific types of content. **Animation** tuning is good for cartoons with flatter colours and uses higher deblocking and more reference frames. **Film** tuning is good for higher quality movie-like content and uses lower deblocking. **Grain** tuning preserves the grain structure in grainy footage.

---

Next: [[:Audio]]
