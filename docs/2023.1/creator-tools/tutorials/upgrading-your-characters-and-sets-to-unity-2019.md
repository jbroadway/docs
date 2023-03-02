# Upgrading your characters and sets to Unity 2019

With Flipside Studio making the jump to Unity 2019, that has an impact on a lot of characters and sets that our users have made. The good news is that most characters and sets will still work without updating, but there are a few areas where things can go wrong.

## Backwards compatibility

We worked hard to make the transition to Unity 2019 as seamless as possible, including auto-updating Unity 2017 assets on import. But that can only get us so far. Here are the issues we've run into that require a character or set to be upgraded to Unity 2019 in order to continue working correctly:

1. Some shaders may not work correctly. The ones we've found we auto-update for you, but we weren't able to test them all. You'll see these with texture mapping issues or other visual artifacts, or in the worst case, the shader may not compile and you'll see the material appear in pink.
2. Lightmaps from Unity 2017 don't map the same in Unity 2019. Our auto-update fix has the side effect of forcing all real-time lights to be vertex lit.
3. Some animations (both Animators and Playable Assets) cause errors on import, so sets using built-in Unity animations may need to be rebuilt in Unity 2019 in order for the animations to work.
4. Characters and sets built in Unity 2017 take slightly longer to load in the beta, due to the auto-update magic.

## Backing up your work

The first thing to do whenever upgrading Unity is to make a backup of your project. If anything goes wrong, you can always open your backup version in Unity 2017 and nothing will be lost.

Unity 2017 will also continue to be the required version for our stable release of Flipside Studio for a little while, so we recommend keeping both versions of Unity installed.

To back up your project, make sure Unity is closed and duplicate your root project folder (the parent folder of Assets and ProjectSettings).

We recommend naming the backup using the form `ProjectName-2017` so you can see that the duplicate is meant for Unity 2017.

## Upgrading Unity and Flipside Creator Tools

Now you should be ready to install Unity 2019 and the latest Flipside Creator Tools, which you can find on our [Flipside Creator Tools download page](https://www.flipsidexr.com/docs/2021.1/creator-tools).

Be sure to install the version of Unity listed on that page, or you will run into problems with your character and set bundles in Flipside Studio.

To upgrade the Flipside Creator Tools, open your project in Unity 2019 and wait for it to finish importing. This may take a few minutes or more, depending on how many assets your project has. When the import has completed, go to _Assets > Import Package > Custom Package_ in the Unity application menu. Select the new version of the Flipside Creator Tools from your downloads, and overwrite any existing files when asked.

As of Unity 2019, there's also one new step in the install/upgrade process:

Navigate to _Window > Package Manager_ and install either the **Oculus Desktop** or **OpenVR (Desktop)** package, depending on your VR headset. This will let you press Play and preview/test your characters and sets in VR.

## Updating your characters and sets

For the most part, characters and sets don't need anything changed in order to work in Unity 2019, they just need to be rebuilt in that version of Unity and uploaded to your Flipside Dashboard. You'll notice there's a new bundle file option labelled **Beta - Windows - Unity 2019**. This is where you'll need to upload your rebuilt characters and sets.

Notice too that there's still a **Windows - Unity 2017** option, so that your previous Unity 2017 version can still be used by Flipside Studio's stable release and can still be updated as needed. As Flipside Studio adds support for additional platforms such as Android, you'll see additional options appear here at that time, too.

If you want to try the new body physics on your characters, take a look at our [Generating colliders on characters](https://www.flipsidexr.com/docs/2021.1/creator-tools/generating-colliders-on-characters) page in the Flipside user manual.

---

Back: [[:Installation and setup]]
