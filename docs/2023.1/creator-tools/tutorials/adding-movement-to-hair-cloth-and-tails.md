# Adding movement to hair, cloth, and tails

Flipside Studio supports the ability to add natural physical movement to hair, cloth, and extra limbs such as tails on characters using a 3rd party plugin called [Magica Cloth](https://assetstore.unity.com/packages/tools/physics/magica-cloth-160144).

## Adding dynamic bones

Here is a quick overview of how to integrate Magica Cloth into your custom Flipside Studio characters.

**Step 1.** First, download your own copy of [Magica Cloth](https://assetstore.unity.com/packages/tools/physics/magica-cloth-160144) to use this integration from the Unity Asset Store.

**Step 2.** Set your project's **Scripting Backend** to **IL2CPP**.

```
Edit > Project Settings > Player > Other Settings > Scripting Backend
```
Then, set your **Api Compatibility Level** to **.Net 4.x**. Do this for both your Standalone and Android settings using the tabs at the top of your Player menu.

![Flipside Creator Tools - Player settings](https://www.flipsidexr.com/files/docs/2023.1/CT_MB_player-settings.png)

**Step 3.** Import your Magica Cloth into the project.

**Step 4.**  In your scene, create an empty game object in the hierarchy under the main root object. Name it something recognizable, like ‘Magica Hair’.

![Flipside Creator Tools - Add object](https://www.flipsidexr.com/files/docs/2023.1/CT_MB_add-magica-hair.png)

**Step 5.** With that object selected in the hierarchy window, click **Add Component** on the **Inspector** window and search for the ‘Magica Bone Cloth’ component. 

Dock the Cloth Monitor window somewhere around your project's layout. This will allow you to see your bones as you make edits.

**Step 6.** In the Inspector window under **Root List**, click the **+** icon and add the first bone chain you want to procedurally animate. 

![Flipside Creator Tools - Root list](https://www.flipsidexr.com/files/docs/2023.1/CT_MB_root-list.png)

Repeat Step 6 for each bone chain for a particular group.  In this case, all of the characters hair bones should be in the root-list.

> **Note:**  If you also want movement on different parts of the character, like their clothes or facial hair, repeat Steps 4 to 6 for each area on a different MagicaBoneCloth component.

**Step 7.** Add **Magica Bone Colliders** to different parts of the characters body by parenting them to your different body parts.

Bone colliders are similar to physics colliders; they inform the simulating Magica Bones about areas the hair/tail/clothing shouldn’t clip through when animating. When a simulating magica bone collides with a flagged collider; it’ll insteads simulate around the colliders shape instead of clipping through the surface.

**MagicaCapsuleCollider** and **MagicaSphereCollider** both work well. Once they’re added to the character, scroll down to the **Collider List** on the object you created in **Step 4** and add the appropriate colliders to the list.  Alternatively, click **All Select** to add every collider in your scene.

**Step 8.** Disable culling.

If the Culling Mode isn’t disabled, it can cause unexpected simulation problems with Flipside Studio’s multi-camera system. 

```
Set Culling > Culling Mode to ‘Off’
```

![Flipside Creator Tools - Culling mode](https://www.flipsidexr.com/files/docs/2023.1/CT_MB_collider-list.png)

**Step 9.** Under **Presets**, select a preset that best fits the type of movement you want. 

![Flipside Creator Tools - Select preset](https://www.flipsidexr.com/files/docs/2023.1/CT_MB_select-a-preset.png)

**Step 10.** Scroll down to the bottom of the component and press **Create**. The appearance of the bones in your scene should change.

![Flipside Creator Tools - Create Magica bones](https://www.flipsidexr.com/files/docs/2023.1/CT_MB_create-magica-bones.png)

**Step 11.** Press **Play** and watch your character's hair move in the scene. If you see unexpected movement, you can add a **Magica Physics Manager** component to your scene to improve the evaluation.   

> **Importaant:** If you add a **Magica Physics Manager** component, **you must delete it** before importing your character into Flipside Studio. If it is not deleted, your character will not load.

**Step 12.** Adjust your settings.

You can tweak settings after simulating to change how the cloth component behaves in your scene (**Radius**, **Gravity** and **Penetratio**n are common areas to pay attention to). You changes will only be applied once you press **Create** after changing your settings.

**Step 13**. When you're done, save your scene and build your character.

---

Next: [[: Fixing forearm twisting ]]
