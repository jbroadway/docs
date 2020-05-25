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

> You can have multiple twist bones but will need to assign them through the Creator Tools.


---

Next: [[:Creating a custom set]]
