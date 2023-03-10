:omit-from-search

# PooledAudioElement

Positions an audio playback location on set that, when triggered, uses Flipside's AudioSource pool so you can use a larger number of audio sources without hitting Unity's limits.

![PooledAudioElement component](https://www.flipsidexr.com/files/docs/screenshots/pooled-audio-element.png)

Basic options:

* **Audio Clips** - A list of preset clips that can be played by calling **PlayOneShot(index)**.
* **Auto-Play Clip** - A clip from the list to auto-play. Default is -1, which means don't auto-play.
* **Loop** - Should playback loop? Default is false.
* **Volume** - The audio volume. Default is 1.
* **Override Audio Source** - An optional individual AudioSource to use instead of using a pooled source.

Spatialization options:

* **Spatialized** - Whether to spatialize the audio or not. Default is true.
* **Gain** - Gain to apply to the spatialized audio. Default is 0.
* **Near** - Near attenuation distance. Default is 0.25 meters.
* **Far** - Far attenuation distance. Default is 100 meters.
* **Volumetric Radius** - An optional volumetric radius. Default is 0.
* **Reverb Send Level** - An optional reverb send level. Default is 0.

PooledAudioElement supports most of the same methods as AudioSource, but adds a convenience methods for setting the volume so you can control it more easily via Unity's event system.

Available methods:

* **Play()** - Play the first audio clip in the list.
* **Play(index)** - Play the specified audio clip from the list.
* **Play(clip)** - Play a specific audio clip. Note: The clip does not have to be in the list.
* **PlayOneShot()** - Play the first audio clip in the list as a one-shot.
* **PlayOneShot(index)** - Play the specified audio clip from the list as a one-shot.
* **PlayOneShot(clip)** - Play a specified audio clip as a one-shot. Note: The clip does not have to be in the list.
* **Pause()** - Pause the audio source.
* **UnPause()** - Resume playing the audio source.
* **Stop()** - Stop the audio source.
* **SetVolume(volume)** - Set the volume of the audio source.
* **SubtractVolume(sub)** - Subtract the specified amount from the audio source volume.
* **AddVolume(add)** - Add the specified amount to the audio source volume.

---

Next: [[Creator Tools / References / Custom components]]
