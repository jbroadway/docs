:omit-from-search

# Adding movement to hair, cloth, and tails

Flipside supports the ability to add natural physical movement to hair, cloth, and extra limbs such as tails on characters using a 3rd party plugin called [Dynamic Bone](https://assetstore.unity.com/packages/tools/animation/dynamic-bone-16743).

## Adding dynamic bones

Here is a quick overview of how to integrate Dynamic Bone into your custom Flipside characters.

1\. You will need to own a copy of the [Dynamic Bone](https://assetstore.unity.com/packages/tools/animation/dynamic-bone-16743) asset to use this integration.

2\. Import the Dynamic Bone asset into your Flipside Creator Tools unity project.

3\. Add the DynamicBone component to the root of your character.

![Dynamic Bone Step 3](https://www.flipsidexr.com/files/docs/screenshots/AddDynamicBoneToCharacter.png)

4\. Navigate in the Hierarchy to the root of your bones you want animated. Add that root object to the `Root` field in the **DynamicBone** component.

![Dynamic Bone Step 4](https://www.flipsidexr.com/files/docs/screenshots/AddDynamicBoneRoot.png)

>At this point you should be able to play the scene, and see the bones reacting the movements.

5\. Adjust the values in the **DynamicBone** component until you are content with the look.

>Keep in mind that any changes made while Unity is playing will be lost when you stop it. To keep the changes you make while playing do the following:
	
>1\. Right click the **DynamicBone** component and click **Copy Component**.

![Dynamic Bone Step 4](https://www.flipsidexr.com/files/docs/screenshots/CopyComponent.png)

>2\. Stop playing the scene.

>3\. Right click the **DynamicBone** component and click **Paste Component Values**.

![Dynamic Bone Step 4](https://www.flipsidexr.com/files/docs/screenshots/PasteComponent.png)

6\. You are finished! At this point you can build your character by clicking **Rebuild Character Bundle**.

---

Next: [[: Fixing forearm twisting ]]
