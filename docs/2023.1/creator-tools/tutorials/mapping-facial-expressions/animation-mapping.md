# Animation Mapping

Animation mapping maps lip syncing to layers in a Unity animation controller. This allows you to animate any [serializable fields](https://docs.unity3d.com/Manual/script-Serialization.html) in your character. This allows much more complex animation systems such as face bones, enabled/disabled objects, and particle systems.

### Steps

1\. Open your character's Unity scene and select the character in the Hierarchy pane.

![Avatar Model References](https://www.flipsidexr.com/files/docs/screenshots/avatar-model-references.png)

2\. In the Inspector pane, change the **Expression Type** setting to **Animation**.

![Expression types](https://www.flipsidexr.com/files/docs/screenshots/expression-types.png)

3\. Scroll down a bit and click **Setup Animator**. This will create an animator on the character's head that can be used to create facial animations.

4\. Click on the **Expression Animator** reference, which will highlight the head's GameObject in the scene. Select the head to begin creating animations.

![Animation expressions 3-4](https://www.flipsidexr.com/files/docs/screenshots/animation-expressions-3-4.png)

5\. Go to _Window > Animation_ and then with the character's head selected, click **Create** in the Animation window.

6\. Make animations for each viseme you want to use. You can re-use viseme animations if you don't want to make all of the variations.

![Animation expressions 6](https://www.flipsidexr.com/files/docs/screenshots/animation-expressions-6.png)

7\. You will need to create a base animation that is a combination of all of the properties used in all of your animations. Make it look how you want your character to look when it is idle. This will stop Unity's animations from adding onto themselves which can cause unwanted artifacts.

![Animation expressions 7](https://www.flipsidexr.com/files/docs/screenshots/animation-expressions-7.png)

8\. Select the **Controller** in the head animator. Go to the Animator window (not the _Animation_ window) found at _Window > Animator_. From here, add each animation as the only animation in each animation layer. Be sure to add your base animation to the base layer to keep the animations grounded.

If you only have one talking animation, add it as the animation for each viseme layer in the Animator window.

![Animation expressions 8](https://www.flipsidexr.com/files/docs/screenshots/animation-expressions-8.png)

---

**Next:** [[:Animation parameters mapping]]
