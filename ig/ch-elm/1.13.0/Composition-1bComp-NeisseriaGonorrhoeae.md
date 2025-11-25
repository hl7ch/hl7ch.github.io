# 1bComp - Neisseria Gonorrhoeae - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **1bComp - Neisseria Gonorrhoeae**

## Example Composition: 1bComp - Neisseria Gonorrhoeae

Language: de-CH

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/5.3.0/NamingSystem-uri.html)/urn:uuid:1901332d-6012-443f-9690-9291df32e177

**status**: Final

**type**: Laborbericht

**date**: 2023-07-14 12:10:00+0200

**author**: [Organization: identifier = urn:oid:2.51.1.3#7601023000119](Organization-1bOrg-Broker.md)

**title**: Laborbericht MikroLab - 14.07.2023



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "1bComp-NeisseriaGonorrhoeae",
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:1901332d-6012-443f-9690-9291df32e177"
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
  "date" : "2023-07-14T12:10:00+02:00",
  "author" : [
    {
      "reference" : "Organization/1bOrg-Broker"
    }
  ],
  "title" : "Laborbericht MikroLab - 14.07.2023",
  "section" : [
    {
      "title" : "Testergebnisse",
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
          "reference" : "Observation/1bObs-NeisseriaGonorrhoeae"
        }
      ]
    }
  ]
}

```
