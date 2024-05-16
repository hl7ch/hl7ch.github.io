### publish new ig's on fhir.ch

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

### publish new version of an on fhir.ch

1. Go to https://github.com/hl7ch/hl7ch.github.io/actions/workflows/BuildIG_publish.yaml
2. Click on Run Workflow, provide ig repo and version