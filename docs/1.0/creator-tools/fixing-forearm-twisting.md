# Fixing forearm twisting

## Wrist twist bone support

Flipside supports the following two structures for wrist twist bones. If your character is rigged and setup correctly, Flipside will automatically discover and use the twist bones.

1\. Parallel twist bones

> In this case, the twist bone must have the same parent as the hand/palm bone. The twist bone cannot have any children or it will not take effect.

![Twist Bone Parallel](https://www.flipsidexr.com/files/docs/screenshots/ParallelTwistBone.png)

2\. Hierarchical twist bones

> In this case, the twist bone must be the child of the forarm bone, and the parent of the palm bone.

![Twist Bone Hierarchical](https://www.flipsidexr.com/files/docs/screenshots/HierarchicalTwistBone.png)

> Be sure that it is not being controlled by mecanim.

![Twist Bone Mecanim](https://www.flipsidexr.com/files/docs/screenshots/HierarchicalBoneMapping.png)

---

Next: [[:Creating a custom set]]
