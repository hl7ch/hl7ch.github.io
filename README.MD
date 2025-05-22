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
3. Update the date and version in the changelog file (according to the step above)
4. Update the STU note box in **index.md** according to the type of publication   

   **Ballot version** (STU or informative -> adapt the text):   
   ```
   This implementation guide is under STU ballot by [HL7 Switzerland](https://www.hl7.ch/) until September 30th, 2025 midnight.   
   Please add your feedback via the ‘Propose a change’-link in the footer on the page where you have comments.

   [Changelog](changelog.html) with significant changes, open and closed issues.
   ```

   **Stable version**:
   ```
   [Changelog](changelog.html) with significant changes, open and closed issues.
   ```
5. Create/update the file **publication-request.json** in the IG root folder, see also [https://confluence.hl7.org/display/FHIR/IG+Publication+Request+Documentation](https://confluence.hl7.org/display/FHIR/IG+Publication+Request+Documentation).
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
6. Verify that the IG build is as expected and error-free, therefore check the ci build.
7. Commit and push the changes to the master branch of the repository   
   
## Publish an IG

### Publish a new IG: preparation
1. You have to give the Github App [FHIR IG Publication on fhir.ch](https://github.com/organizations/hl7ch/settings/installations) permission to your repo  
2. Continue with the steps below

**Note:** If you rename an IG and have an old IG that you refer in package-list.json (e.g. [https://fhir.ch/ig/ch-term/package-list.json](https://fhir.ch/ig/ch-term/package-list.json)), you need to update the file [.github/workflows/BuildIG_publish.yaml](https://github.com/hl7ch/hl7ch.github.io/.github/workflows/BuildIG_publish.yaml), see ch-term entry as an example. 
 
### Publish an updated or new release of an IG 
1. Go to [https://github.com/hl7ch/hl7ch.github.io/actions/workflows/BuildIG_publish.yaml](https://github.com/hl7ch/hl7ch.github.io/actions/workflows/BuildIG_publish.yaml) (> Actions > Build IG and publish)
2. Click on **Run workflow**, provide the **repository** of the IG and the **version** of the IG. If the **tick** is set it will commit the tag the release in the repository here and publish to [fhir.ch](https://fhir.ch). If the publish tick is set to false, the generated IGs will be provided as an artifact (dry run).  
3. If everything is successful, the master branch will be tagged with the version you specified and you get a zulip message in the [switzerland stream](https://chat.fhir.org/#narrow/stream/214781-switzerland/topic/fhir.2Ech.3A.20new.20FHIR.20Implementation.20Guide.20published) that the IG got published

**Note:** You should not run publication actions in parallel if you have the publish flag set to true, this will not work (merge conflicts).

### Keeping https://fhir.org/guides/registry/ in sync

During publication ig-registry/fhir-ig-list.json gets updated. If you wan't to keep the https://fhir.org/guides/registry/ in sync, you need to copy the changes from ig-registry/fhir-ig-list.json to https://github.com/ahdis/ig-registry/blob/master/fhir-ig-list.json and then create a PR to https://github.com/FHIR/ig-registry.

# Background setup
The implementation guides are hosted here in this repository.   
[fhir.ch](https://fhir.ch) syncs the setup every 10 minutes from this repository behind reverse proxy setup and returns the content from the github page.

This repository is too big, that it could be hosted via github pages :-(
