# Publication setup for fhir.ch

In this repository we store all by HL7 Switzerland published FHIR Implementation Guides for [fhir.ch](https://fhir.ch).

## update index.html

If you update index.html the file will be automatically published to fhir.ch (there is some caching on the reverse proxy, it might
take a few minutes).

## Publish a new IG: preparation

1.you might need to create a new folder with the ig name in the folder ig (to be confirmed)

```

Note: if you rename an ig and have an old ig you refer in package-list.json you need to update [.github/workflow/BuildIG_publish.yaml](https://github.com/hl7ch/hl7ch.github.io/.github/workflows/BuildIG_publish.yaml), see ch-term entry as an example. 

## Publish an updated or new release IG 

1. Go to https://github.com/hl7ch/hl7ch.github.io/actions/workflows/BuildIG_publish.yaml
2. Click on Run Workflow, provide ig repo and version, if the flag publish is set it will commit the release here and publish to [fhir.ch](https://fhir.ch). If publish setup is set to false, the generated ig's will be provided as an artifact (dryrun).  

Note: You should not run publication actions in parallel if you have the publish flag set to true, this will not work (merge conflicts).

# Background setup

The implementation guides are hosted here, but then uploaded to a google drive.
[fhir.ch](https://fhir.ch) has reverse proxy setup and returns the content from the the google drive.

The repository is too big here, that it could be hosted via github pages :-(
