# 71Doc-RSV - CH ELM (R4) v1.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **71Doc-RSV**

## Example Bundle: 71Doc-RSV



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "71Doc-RSV",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2cb3b"
  },
  "type" : "document",
  "timestamp" : "2023-09-20T07:35:00+02:00",
  "entry" : [{
    "fullUrl" : "urn:uuid:03ab0082-4dc0-49ef-8dc3-efc742d55246",
    "resource" : {
      "resourceType" : "Composition",
      "id" : "03ab0082-4dc0-49ef-8dc3-efc742d55246",
      "language" : "de-CH",
      "identifier" : {
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2cb3b"
      },
      "status" : "final",
      "type" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "4241000179101",
          "display" : "Laborbericht"
        },
        {
          "system" : "http://loinc.org",
          "code" : "11502-2",
          "display" : "Laboratory report"
        }]
      },
      "subject" : {
        "reference" : "urn:uuid:89d1dfde-9eee-4698-9e2a-67e1da67a731"
      },
      "date" : "2023-09-20T07:35:00+02:00",
      "author" : [{
        "reference" : "urn:uuid:34c3be17-0348-4ed8-8a68-1137eae34c9b"
      }],
      "title" : "Laborbericht vom 20.09.2023",
      "section" : [{
        "title" : "Analyseergebnisse der mikrobiologischen Untersuchung",
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "18725-2",
            "display" : "Microbiology studies (set)"
          }]
        },
        "entry" : [{
          "reference" : "urn:uuid:29da363b-ba9b-4701-b0fa-57f2590022ac"
        }]
      }]
    }
  },
  {
    "fullUrl" : "urn:uuid:89d1dfde-9eee-4698-9e2a-67e1da67a731",
    "resource" : {
      "resourceType" : "Patient",
      "id" : "89d1dfde-9eee-4698-9e2a-67e1da67a731",
      "identifier" : [{
        "system" : "urn:oid:2.16.756.5.32",
        "value" : "7561733446723"
      }],
      "name" : [{
        "family" : "F",
        "given" : ["H"]
      }],
      "gender" : "female",
      "birthDate" : "1985-10-17",
      "address" : [{
        "use" : "home",
        "city" : "Derendingen",
        "state" : "SO",
        "postalCode" : "4552",
        "country" : "CH",
        "_country" : {
          "extension" : [{
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-codedString",
            "valueCoding" : {
              "system" : "urn:iso:std:iso:3166",
              "code" : "CH"
            }
          }]
        }
      }]
    }
  },
  {
    "fullUrl" : "urn:uuid:34c3be17-0348-4ed8-8a68-1137eae34c9b",
    "resource" : {
      "resourceType" : "Organization",
      "id" : "34c3be17-0348-4ed8-8a68-1137eae34c9b",
      "identifier" : [{
        "system" : "urn:oid:2.51.1.3",
        "value" : "7601002331470"
      }],
      "name" : "SanLab"
    }
  },
  {
    "fullUrl" : "urn:uuid:29da363b-ba9b-4701-b0fa-57f2590022ac",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "29da363b-ba9b-4701-b0fa-57f2590022ac",
      "status" : "final",
      "category" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/observation-category",
          "code" : "laboratory",
          "display" : "Laboratory"
        }]
      }],
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "105211-7"
        }]
      },
      "subject" : {
        "reference" : "urn:uuid:89d1dfde-9eee-4698-9e2a-67e1da67a731"
      },
      "effectiveDateTime" : "2023-09-19T17:50:00+02:00",
      "performer" : [{
        "reference" : "urn:uuid:34c3be17-0348-4ed8-8a68-1137eae34c9b"
      }],
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "10828004",
          "display" : "Positive (qualifier value)"
        }]
      },
      "interpretation" : [{
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/v3-ObservationInterpretation",
          "code" : "POS",
          "display" : "Positive"
        }]
      }],
      "specimen" : {
        "reference" : "urn:uuid:03196bc9-c085-4d72-ad01-96c1adb1fbca"
      }
    }
  },
  {
    "fullUrl" : "urn:uuid:a3d27f97-b73b-47fb-bbbc-2af09910c9c4",
    "resource" : {
      "resourceType" : "Practitioner",
      "id" : "a3d27f97-b73b-47fb-bbbc-2af09910c9c4",
      "identifier" : [{
        "system" : "urn:oid:2.51.1.3",
        "value" : "7601000234438"
      }],
      "name" : [{
        "family" : "Giacometti",
        "given" : ["Monika"]
      }],
      "telecom" : [{
        "system" : "phone",
        "value" : "+41 79 111 44 55"
      },
      {
        "system" : "email",
        "value" : "m.giacometti@ks-abc.ch"
      }]
    }
  },
  {
    "fullUrl" : "urn:uuid:a341ed1c-fdc1-4316-a2a5-b3a6a940ae80",
    "resource" : {
      "resourceType" : "Organization",
      "id" : "a341ed1c-fdc1-4316-a2a5-b3a6a940ae80",
      "identifier" : [{
        "system" : "urn:oid:2.16.756.5.45",
        "value" : "A99684215"
      }],
      "name" : "Kantonsspital ABC",
      "address" : [{
        "line" : ["Aortastrasse 22"],
        "_line" : [{
          "extension" : [{
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
            "valueString" : "Aortastrasse"
          },
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
            "valueString" : "22"
          },
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-postBox",
            "valueString" : "Postfach 18"
          }]
        }],
        "city" : "Bern",
        "postalCode" : "3000"
      }]
    }
  },
  {
    "fullUrl" : "urn:uuid:44b36e10-0fa6-43e9-a8e4-f51a191d1918",
    "resource" : {
      "resourceType" : "PractitionerRole",
      "id" : "44b36e10-0fa6-43e9-a8e4-f51a191d1918",
      "practitioner" : {
        "reference" : "urn:uuid:a3d27f97-b73b-47fb-bbbc-2af09910c9c4"
      },
      "organization" : {
        "reference" : "urn:uuid:a341ed1c-fdc1-4316-a2a5-b3a6a940ae80"
      }
    }
  },
  {
    "fullUrl" : "urn:uuid:03196bc9-c085-4d72-ad01-96c1adb1fbca",
    "resource" : {
      "resourceType" : "Specimen",
      "id" : "03196bc9-c085-4d72-ad01-96c1adb1fbca",
      "subject" : {
        "reference" : "urn:uuid:89d1dfde-9eee-4698-9e2a-67e1da67a731"
      },
      "collection" : {
        "collectedDateTime" : "2023-09-19"
      }
    }
  },
  {
    "fullUrl" : "urn:uuid:3b371197-4f44-47d4-9ef4-e1a43039fe8d",
    "resource" : {
      "resourceType" : "ServiceRequest",
      "id" : "3b371197-4f44-47d4-9ef4-e1a43039fe8d",
      "identifier" : [{
        "value" : "26955847714"
      }],
      "status" : "completed",
      "intent" : "order",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "105211-7"
        }]
      },
      "subject" : {
        "reference" : "urn:uuid:89d1dfde-9eee-4698-9e2a-67e1da67a731"
      },
      "requester" : {
        "reference" : "urn:uuid:44b36e10-0fa6-43e9-a8e4-f51a191d1918"
      },
      "specimen" : [{
        "reference" : "urn:uuid:03196bc9-c085-4d72-ad01-96c1adb1fbca"
      }]
    }
  },
  {
    "fullUrl" : "urn:uuid:172a88b7-8bb4-471c-b1bf-255a8d99aaea",
    "resource" : {
      "resourceType" : "DiagnosticReport",
      "id" : "172a88b7-8bb4-471c-b1bf-255a8d99aaea",
      "extension" : [{
        "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
        "valueReference" : {
          "reference" : "urn:uuid:03ab0082-4dc0-49ef-8dc3-efc742d55246"
        }
      }],
      "identifier" : [{
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2cb3b"
      }],
      "basedOn" : [{
        "reference" : "urn:uuid:3b371197-4f44-47d4-9ef4-e1a43039fe8d"
      }],
      "status" : "final",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "11502-2",
          "display" : "Laboratory report"
        }]
      },
      "subject" : {
        "reference" : "urn:uuid:89d1dfde-9eee-4698-9e2a-67e1da67a731"
      },
      "performer" : [{
        "reference" : "urn:uuid:34c3be17-0348-4ed8-8a68-1137eae34c9b"
      }],
      "specimen" : [{
        "reference" : "urn:uuid:03196bc9-c085-4d72-ad01-96c1adb1fbca"
      }],
      "result" : [{
        "reference" : "urn:uuid:29da363b-ba9b-4701-b0fa-57f2590022ac"
      }]
    }
  }]
}

```
