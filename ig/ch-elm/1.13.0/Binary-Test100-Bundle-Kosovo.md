# Test100-Bundle-Kosovo - CH ELM (R4) v1.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Test100-Bundle-Kosovo**

## Binary: Test100-Bundle-Kosovo

```

{
  "resourceType" : "Bundle",
  "id" : "3Doc-CPE",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
  },
  "type" : "document",
  "timestamp" : "2025-01-20T12:00:00+02:00",
  "entry" : [{
    "fullUrl" : "urn:uuid:1ff60afc-a29a-46c8-9c2c-445249b698f0",
    "resource" : {
      "resourceType" : "Composition",
      "id" : "1ff60afc-a29a-46c8-9c2c-445249b698f0",
      "language" : "de-CH",
      "identifier" : {
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
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
        "reference" : "urn:uuid:29b85736-5d40-4e00-ad73-af65dc9b9e14"
      },
      "date" : "2025-01-20T12:00:00+02:00",
      "author" : [{
        "reference" : "urn:uuid:773e24c7-e09b-4f40-b514-4c55241c58d9"
      }],
      "title" : "Laborbericht vom 20.01.2025",
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
          "reference" : "urn:uuid:f592a404-0eea-40da-a828-5b2d2bf17e56"
        }]
      }]
    }
  },
  {
    "fullUrl" : "urn:uuid:29b85736-5d40-4e00-ad73-af65dc9b9e14",
    "resource" : {
      "resourceType" : "Patient",
      "id" : "29b85736-5d40-4e00-ad73-af65dc9b9e14",
      "identifier" : [{
        "system" : "urn:oid:2.16.756.5.32",
        "value" : "7561234567897"
      }],
      "name" : [{
        "family" : "Dupont",
        "given" : ["Antoine"]
      }],
      "gender" : "female",
      "birthDate" : "1981-02-07",
      "address" : [{
        "use" : "home",
        "line" : ["18b, Mel Çitaku"],
        "_line" : [{
          "extension" : [{
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
            "valueString" : "Mel Çitaku"
          },
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
            "valueString" : "18b"
          }]
        }],
        "city" : "Pristina",
        "state" : "XK",
        "postalCode" : "10010",
        "country" : "XK",
        "_country" : {
          "extension" : [{
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-SC-coding",
            "valueCoding" : {
              "system" : "urn:iso:std:iso:3166",
              "code" : "XK"
            }
          }]
        }
      }]
    }
  },
  {
    "fullUrl" : "urn:uuid:773e24c7-e09b-4f40-b514-4c55241c58d9",
    "resource" : {
      "resourceType" : "Organization",
      "id" : "773e24c7-e09b-4f40-b514-4c55241c58d9",
      "identifier" : [{
        "system" : "urn:oid:2.51.1.3",
        "value" : "7601002331470"
      }],
      "name" : "SanLab"
    }
  },
  {
    "fullUrl" : "urn:uuid:f592a404-0eea-40da-a828-5b2d2bf17e56",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "f592a404-0eea-40da-a828-5b2d2bf17e56",
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
          "system" : "http://snomed.info/sct",
          "code" : "734351004"
        }]
      },
      "subject" : {
        "reference" : "urn:uuid:29b85736-5d40-4e00-ad73-af65dc9b9e14"
      },
      "effectiveDateTime" : "2025-01-19T14:20:00+02:00",
      "performer" : [{
        "reference" : "urn:uuid:773e24c7-e09b-4f40-b514-4c55241c58d9"
      }],
      "dataAbsentReason" : {
        "coding" : [{
          "system" : "http://terminology.hl7.org/CodeSystem/data-absent-reason",
          "code" : "not-applicable"
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
        "reference" : "urn:uuid:c0dc0c4b-2b98-4b18-b4eb-e957ad44fcc7"
      }
    }
  },
  {
    "fullUrl" : "urn:uuid:28ab23bc-3c08-4cca-821e-e77d95b336bc",
    "resource" : {
      "resourceType" : "Practitioner",
      "id" : "28ab23bc-3c08-4cca-821e-e77d95b336bc",
      "identifier" : [{
        "system" : "urn:oid:2.51.1.3",
        "value" : "7601000000514"
      }],
      "name" : [{
        "family" : "Hauser",
        "given" : ["Peter"]
      }],
      "telecom" : [{
        "system" : "phone",
        "value" : "+41 79 222 33 44"
      },
      {
        "system" : "email",
        "value" : "peter.hauser@hauserpraxis.ch"
      }]
    }
  },
  {
    "fullUrl" : "urn:uuid:d4f5059d-7b95-4f7e-8dd7-6193eff6f42b",
    "resource" : {
      "resourceType" : "Organization",
      "id" : "d4f5059d-7b95-4f7e-8dd7-6193eff6f42b",
      "identifier" : [{
        "system" : "urn:oid:2.16.756.5.45",
        "value" : "A74966168"
      }],
      "name" : "Praxis Dr. Hauser",
      "address" : [{
        "line" : ["Hauptstrasse 10"],
        "_line" : [{
          "extension" : [{
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
            "valueString" : "Hauptstrasse"
          },
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
            "valueString" : "10"
          }]
        }],
        "city" : "Solothurn",
        "postalCode" : "4500"
      }]
    }
  },
  {
    "fullUrl" : "urn:uuid:af32d56a-15f7-4d0b-bee8-bca91d54d266",
    "resource" : {
      "resourceType" : "PractitionerRole",
      "id" : "af32d56a-15f7-4d0b-bee8-bca91d54d266",
      "practitioner" : {
        "reference" : "urn:uuid:28ab23bc-3c08-4cca-821e-e77d95b336bc"
      },
      "organization" : {
        "reference" : "urn:uuid:d4f5059d-7b95-4f7e-8dd7-6193eff6f42b"
      }
    }
  },
  {
    "fullUrl" : "urn:uuid:c0dc0c4b-2b98-4b18-b4eb-e957ad44fcc7",
    "resource" : {
      "resourceType" : "Specimen",
      "id" : "c0dc0c4b-2b98-4b18-b4eb-e957ad44fcc7",
      "subject" : {
        "reference" : "urn:uuid:29b85736-5d40-4e00-ad73-af65dc9b9e14"
      },
      "collection" : {
        "collectedDateTime" : "2025-01-15T14:20:00+02:00"
      }
    }
  },
  {
    "fullUrl" : "urn:uuid:6655a27e-7a73-4563-966b-f946dc3d563f",
    "resource" : {
      "resourceType" : "ServiceRequest",
      "id" : "6655a27e-7a73-4563-966b-f946dc3d563f",
      "identifier" : [{
        "value" : "26500923675"
      }],
      "status" : "completed",
      "intent" : "order",
      "code" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "734351004"
        }]
      },
      "subject" : {
        "reference" : "urn:uuid:29b85736-5d40-4e00-ad73-af65dc9b9e14"
      },
      "requester" : {
        "reference" : "urn:uuid:af32d56a-15f7-4d0b-bee8-bca91d54d266"
      },
      "specimen" : [{
        "reference" : "urn:uuid:c0dc0c4b-2b98-4b18-b4eb-e957ad44fcc7"
      }]
    }
  },
  {
    "fullUrl" : "urn:uuid:c5d41d78-7bcf-4b0d-ad33-cb88996ad323",
    "resource" : {
      "resourceType" : "DiagnosticReport",
      "id" : "c5d41d78-7bcf-4b0d-ad33-cb88996ad323",
      "extension" : [{
        "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
        "valueReference" : {
          "reference" : "urn:uuid:1ff60afc-a29a-46c8-9c2c-445249b698f0"
        }
      }],
      "identifier" : [{
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:54013a2d-6012-443f-9a90-6331adb23aab"
      }],
      "basedOn" : [{
        "reference" : "urn:uuid:6655a27e-7a73-4563-966b-f946dc3d563f"
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
        "reference" : "urn:uuid:29b85736-5d40-4e00-ad73-af65dc9b9e14"
      },
      "performer" : [{
        "reference" : "urn:uuid:773e24c7-e09b-4f40-b514-4c55241c58d9"
      }],
      "specimen" : [{
        "reference" : "urn:uuid:c0dc0c4b-2b98-4b18-b4eb-e957ad44fcc7"
      }],
      "result" : [{
        "reference" : "urn:uuid:f592a404-0eea-40da-a828-5b2d2bf17e56"
      }]
    }
  }]
}
```



## Resource Binary Content

application/fhir+json:

```
{snip}
```
