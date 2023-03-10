:omit-from-search

# Version Numbering

Beginning with the [first Flipside Studio release candidate in 2020](https://www.flipsidexr.com/blog/post/80/update-38-flipside-studio-release-candidate-1), we are moving to a [Calendar Versioning](https://calver.org/), or CalVer, numbering system and keeping versions in sync across our suite of products.

## Let's look at an example

```
2020.1.0-rc1
```

This breaks down into the following elements:

* `2020` - The year of the release.
* `1` - The minor release number within the year, starting at one.
* `0` - The patch number for the update, starting at zero which means no patch.
* `rc1` - The release stage suffix, in this case denoting that this is "release candidate number one".

Each beta that follows a stable release will increment either the year or the minor release number, depending on whether the beta falls in or close to a new calendar year or not.

Patch numbers only increase after a release is marked `-stable`. Prior to that, the beta or release candidate number is denoted after the release stage suffix, e.g., `-beta1`, `-beta2`, etc.

Valid suffixes include `-alpha#`, `-beta#`, `-rc#`, and `-stable`, although in practice alpha releases are internal only.

### More examples

Here are a series of examples as the version numbers increment with new updates:

* `2020.1.0-beta1`
* `2020.1.0-beta2`
* `2020.1.0-beta3`
* `2020.1.0-rc1`
* `2020.1.0-rc2`
* `2020.1.0-stable`
* `2020.1.1-stable`
* `2020.1.2-stable`
* `2020.2.0-beta1` or `2021.1.0-beta1`
* Etc.
