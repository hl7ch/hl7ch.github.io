# 1Comp - Neisseria Gonorrhoeae - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1Comp - Neisseria Gonorrhoeae**

## Example Composition: 1Comp - Neisseria Gonorrhoeae



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "1Comp-NeisseriaGonorrhoeae",
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2e19d"
  },
  "status" : "final",
  "type" : {
    "coding" : [
      {
        "system" : "http://snomed.info/sct",
        "version" : "http://snomed.info/sct/2011000195101",
        "code" : "4241000179101",
        "display" : "Laborbericht"
      },
      {
        "system" : "http://loinc.org",
        "code" : "11502-2",
        "display" : "Laboratory report"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/Pat-001"
  },
  "date" : "2023-07-14T16:00:00+02:00",
  "author" : [
    {
      "reference" : "Organization/1Org-Labor"
    }
  ],
  "title" : "Laborbericht vom 14.07.2023",
  "section" : [
    {
      "title" : "Analyseergebnisse der mikrobiologischen Untersuchung",
      "code" : {
        "coding" : [
          {
            "system" : "http://loinc.org",
            "code" : "18725-2",
            "display" : "Microbiology studies (set)"
          }
        ]
      },
      "entry" : [
        {
          "reference" : "Observation/1Obs-NeisseriaGonorrhoeae"
        }
      ]
    }
  ]
}

```
