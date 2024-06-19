# Publication setup for fhir.ch
In this repository we store all FHIR Implementation Guides (IG) published by HL7 Switzerland on [fhir.ch](https://fhir.ch).

- [Update index.html](#update-indexhtml)
- [Prepare an IG for publication](#prepare-an-ig-for-publication)
- [Publish an IG](#publish-an-ig)
   - [Publish a new IG: preparation](#publish-a-new-ig-preparation)
   - [Publish an updated or new release of an IG](#publish-an-updated-or-new-release-of-an-ig)
- [Background setup](#background-setup)


## Update index.html
If you update [index.html](https://github.com/hl7ch/hl7ch.github.io/blob/main/index.html) the file will be automatically published on fhir.ch (there is some caching on the reverse proxy, it might take a few minutes).

## Prepare an IG for publication
1. Go to the repository of the IG (example ch-core)
2. Update/check the IG config **sushi-config.yaml** or **ch.fhir.ig.ch-core.xml**   
   - `date: 2024-06-19`   
   - `version: 5.0.0-ballot` or `version: 5.0.0`    
      - after the publication change the value to `version: {next-proposed-version}-ci-build`   
   - `releaselabel: ballot` or `releaselabel: trial-use` 
      - ci-build | draft | qa-preview | ballot | trial-use | release | update | normative+trial-use  
      - after the publication change the value to `releaselabel: ci-build`   
   - all `dependencies`   
   - `license: CC0-1.0`   
3. Update the STU note box in **index.md** according to the type of publication   

   Ballot (STU or informative):   
   ```
   This implementation guide is under STU ballot by [HL7 Switzerland](https://www.hl7.ch/) until September 30th, 2024 midnight.   
   Please add your feedback via the ‘Propose a change’-link in the footer on the page where you have comments.

   [Significant changes, open and closed issues.](changelog.html)
   ```

   Stable version:
   ```
   [Significant changes, open and closed issues.](changelog.html)
   ```
4. Create/update the file **publication-request.json** in the IG root folder, see also [https://confluence.hl7.org/display/FHIR/IG+Publication+Request+Documentation](https://confluence.hl7.org/display/FHIR/IG+Publication+Request+Documentation).
   ```
   {
     "package-id" : "ch.fhir.ig.ch-core",
     "version" : "5.0.0-ballot", (or {5.0.0})
     "path" : "http://fhir.ch/ig/ch-core/5.0.0-ballot", (or {http://fhir.ch/ig/ch-core/5.0.0})
     "mode" : "milestone",
     "status" : "ballot", (or {trial-use})
     "sequence" : "STU 5",
     "desc" : "HL7 Switzerland STU 5 Ballot", (or {HL7 Switzerland STU 5})
     "changes" : "changelog.html",
     "first" : false
   }
   ```
   For the first release, some more elements are required.
5. Verify that the IG build is as expected and error-free, therefore check the ci build.
6. Commit and push the changes to the master branch of the repository   
7. [Set a tag](https://git-scm.com/book/en/v2/Git-Basics-Tagging) (from command line in repo)
   ```
   git tag -a v5.0.0-ballot -m "published version 5.0.0-ballot on 2024-06-19"   
   git push origin v5.0.0-ballot
   ```
8. Create a [release in github](https://docs.github.com/en/repositories/releasing-projects-on-github/managing-releases-in-a-repository#creating-a-release)
   
## Publish an IG

### Publish a new IG: preparation
1. You might need to create a new folder named after the IG you want to pubish in the folder [ig](https://github.com/hl7ch/hl7ch.github.io/tree/main/ig) (to be confirmed)
2. Continue with the steps below

**Note:** If you rename an IG and have an old IG that you refer in package-list.json (e.g. [https://fhir.ch/ig/ch-term/package-list.json](https://fhir.ch/ig/ch-term/package-list.json)), you need to update the file [.github/workflows/BuildIG_publish.yaml](https://github.com/hl7ch/hl7ch.github.io/.github/workflows/BuildIG_publish.yaml), see ch-term entry as an example. 
 
### Publish an updated or new release of an IG 
1. Go to [https://github.com/hl7ch/hl7ch.github.io/actions/workflows/BuildIG_publish.yaml](https://github.com/hl7ch/hl7ch.github.io/actions/workflows/BuildIG_publish.yaml) (> Actions > Build IG and publish)
2. Click on **Run workflow**, provide the repository of the IG repo and the version of the IG. If the tick is set it will commit the release here and publish to [fhir.ch](https://fhir.ch). If the publish tick is set to false, the generated IGs will be provided as an artifact (dry run).  

**Note:** You should not run publication actions in parallel if you have the publish flag set to true, this will not work (merge conflicts).

# Background setup
The implementation guides are hosted here in this repository, but then uploaded to a google drive.   
[fhir.ch](https://fhir.ch) has reverse proxy setup and returns the content from the the google drive.

This repository is too big, that it could be hosted via github pages :-(
