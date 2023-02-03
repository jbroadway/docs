# Mapping facial expressions

Flipside's facial expression engine can animate your characters' faces in a variety of ways, including eyes (movement and blinking), facial expressions (happy, sad, surprised, angry), and lip syncing as you speak.

In the [Flipside Creator Tools](/docs/2021.1/creator-tools) this is mapped to your character in its **AvatarModelReferences** component, found in the Unity inspector window when you open your character's scene and click on the root of your character in the scene hierarchy.

There are several methods of mapping facial expressions:

1. [[>Blend shape mapping]] - Maps facial expressions to various preset shapes on your character model's face that represent each facial expression, eye blink state, and lip sync [viseme](https://en.wikipedia.org/wiki/Viseme).
2. [[>Simplified blend shape mapping]] - Blend shape mapping with only one shape for lip syncing representing an open mouth state. Great for Muppet-style animation!
3. [[>Texture mapping]] - Maps lip syncing to a series of textures that represent your character's face in that position. Great for that classic cartoon feel!
4. [[>Combo-texture mapping]] - Maps lip syncing to a series of textures that represent your character's mouth being open or closed, happy/sad/surprised/angry expressions, and eyes open/closed.
5. [[>Animation mapping]] - Maps lip syncing to layers in a Unity [animation controller](https://docs.unity3d.com/Manual/AnimationOverview.html). This allows you to animate any serializable fields in your character. This allows much more complex animation systems such as face bones, enabled/disabled objects, and particle systems.
6. [[>Animation parameters mapping]] - Maps lip syncing to Unity [animation parameters](https://docs.unity3d.com/Manual/AnimationParameters.html) for more flexible control over how animations are applied.

## Combining multiple mappings together

Often a particular effect can't be achieved with just one type of facial expression mapping. For that reason, we also offer a **FacialExpressionReference** component which lets you combine multiple mappings on a single character.

To use it, add one instance of the **FacialExpressionReference** component for each type of mapping you want to use under the **AvatarModelReferences** component on the same root object of your character.

For example, you can combine animations with texture-swapping, or even use both [[>texture mapping]] and [[>combo-texture mapping]] together to achieve more complex texture-based animations. This adds a great deal of flexibility to building compelling face animations.

## Need help?

[Contact us](/contact) to help you create and import your own custom characters.

---

**Next:** [[:Blend shape mapping]]
