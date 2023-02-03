# VideoElement

Enables the playing of videos on objects in your sets, including full playback controls.

![VideoElement component](https://www.flipsidexr.com/files/docs/screenshots/videoelement.png)

You can provide a list of videos, in which case it can act as a slideshow, or a single video link.

You can also choose whether to auto-play, whether to loop all or just the first the video, and set the audio volume.

To control playback via Unity events, you can use the following custom methods that the VideoElement component provides:

* **Next()** - Play the next video in the list.
* **Previous()** - Play the previous video in the list.
* **Pause()** - Pause playback.
* **Play()** - Play or resume playback.
* **Play(num)** - Play the video at the specified number in the list, counting from zero.
* **Last()** - Play the last video in the list.
* **First()** - Play the first video in the list.
* **Volume(val)** - Set the audio volume.
* **SetPlaybackSpeed(speed)** - Change the playback speed (0-4x).

---

**Back:** [[Creator Tools / References / Custom components]]
