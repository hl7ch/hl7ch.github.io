# Publication setup for fhir.ch

In this repository we store all FHIR Implementation Guides (IG) published by HL7 Switzerland on [fhir.ch](https://fhir.ch).


## Update index.html

If you update [index.html](https://github.com/hl7ch/hl7ch.github.io/blob/main/index.html) the file will be automatically published on fhir.ch (there is some caching on the reverse proxy, it might take a few minutes).


## Publish a new IG: preparation

1. You might need to create a new folder named after the IG you want to pubish in the folder [ig](https://github.com/hl7ch/hl7ch.github.io/tree/main/ig) (to be confirmed)

**Note:** If you rename an IG and have an old IG that you refer in package-list.json (e.g. [https://fhir.ch/ig/ch-term/package-list.json](https://fhir.ch/ig/ch-term/package-list.json)), you need to update the file [.github/workflows/BuildIG_publish.yaml](https://github.com/hl7ch/hl7ch.github.io/.github/workflows/BuildIG_publish.yaml), see ch-term entry as an example. 
 
2. Continue with the next steps


## Publish an updated or new release of an IG 

1. Go to [https://github.com/hl7ch/hl7ch.github.io/actions/workflows/BuildIG_publish.yaml](https://github.com/hl7ch/hl7ch.github.io/actions/workflows/BuildIG_publish.yaml) (> Actions > Build IG and publish)
2. Click on **Run workflow**, provide the repository of the IG repo and the version of the IG. If the tick is set it will commit the release here and publish to [fhir.ch](https://fhir.ch). If the publish tick is set to false, the generated IGs will be provided as an artifact (dry run).  

**Note:** You should not run publication actions in parallel if you have the publish flag set to true, this will not work (merge conflicts).


# Background setup

The implementation guides are hosted here in this repository, but then uploaded to a google drive.
[fhir.ch](https://fhir.ch) has reverse proxy setup and returns the content from the the google drive.

This repository is too big, that it could be hosted via github pages :-(
