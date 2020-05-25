# Fixing forearm twisting

## Wrist twist bone support

Flipside supports the following two structures for wrist twist bones. If your character is rigged and setup correctly, Flipside will automatically discover and use the twist bones.

1\. Parallel twist bones

> In this case, the twist bone must have the same parent as the hand/palm bone.

![Twist Bone Parallel](https://www.flipsidexr.com/files/docs/screenshots/ParallelTwistBone.png)

2\. Hierarchical twist bones

> In this case, the twist bone must be the child of the forarm bone, and the parent of the palm bone.

![Twist Bone Hierarchical](https://www.flipsidexr.com/files/docs/screenshots/HierarchicalTwistBone.png)

> Be sure that it is not being controlled by mecanim.

![Twist Bone Mecanim](https://www.flipsidexr.com/files/docs/screenshots/HierarchicalBoneMapping.png)

3\. Multiple twist bones

> You can have multiple twist bones but will need to assign them through the Creator Tools. In the Mecanim bone mapping, make sure lower arm and hand have assigned values. Those are what the wrist bones try to match for rotation.

> Go to the AvatarModelReferences on your character. You should see a section titled **Wrist Settings** with lists for Left and Right Wrist Twist Bones

![Empty Wrist Bones](https://raw.githubusercontent.com/campfireunion/docs/master/docs/1.0/creator-tools/EmptyWristBones.gif)

> If both lists are empty, you should also see a **Find Wrist Bones** button. If you click that, Flipside will search for a child of the lower arm other than the hand and assign that to the list. This is the same as what it uses by default if you don't assign one here.

> To get more than one twist bone per wrist, or if Find Wrist Bones didn't find the right game objects, you can directly assign a gameobject by dragging and dropping from the hierarchy window onto the list.


---

Next: [[:Creating a custom set]]
