### prepare new ig's for fhir.ch

1. To add a new IG create a new folder with the ig name in the folder ig
2. Add an default package-list.json

```json
{
    "package-id": "ch.fhir.ig.ch-ig",
    "title": "CH IG (R4)",
    "introduction": "Example IG.",
    "canonical": "http://fhir.ch/ig/ch-ig",
    "list": [
        {
            "version": "current",
            "desc": "Continuous Integration Build (latest in version control)",
            "path": "http://build.fhir.org/ig/ahdis/ch-ig",
            "status": "ci-build",
            "current": true
        }
    ],
    "category": "National Base"
}
```

### prepare new version for fhir.ch

1. Go to https://github.com/hl7ch/hl7ch.github.io/actions/workflows/BuildIG_publish.yaml
2. Click on Run Workflow, provide ig repo and version




### publishh to fhir.ch

gsutil -m rsync ./ig/ch-term gs://fhir-ch-www/ig/ch-term
gsutil -m rsync -r ./ig/ch-term/assets gs://fhir-ch-www/ig/ch-term/assets
gsutil -m rsync -r ./ig/ch-term/3.0.0 gs://fhir-ch-www/ig/ch-term/3.0.0
gsutil cp ./package-feed.xml gs://fhir-ch-www/
gsutil cp ./package-registry.json gs://fhir-ch-www/
gsutil cp ./publication-feed.xml gs://fhir-ch-www/

gsutil cp ./index.html gs://fhir-ch-www/
