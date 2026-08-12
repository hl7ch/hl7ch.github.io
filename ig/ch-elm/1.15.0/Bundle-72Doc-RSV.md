# 72Doc-RSV - CH ELM (R4) v1.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **72Doc-RSV**

## Example Bundle: 72Doc-RSV



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "72Doc-RSV",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2cb3b"
  },
  "type" : "document",
  "timestamp" : "2023-09-20T07:35:00+02:00",
  "entry" : [{
    "fullUrl" : "urn:uuid:c2f6cc2a-d28a-43d0-9fd1-cc20048bef1d",
    "resource" : {
      "resourceType" : "Composition",
      "id" : "c2f6cc2a-d28a-43d0-9fd1-cc20048bef1d",
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
        "reference" : "urn:uuid:f6feaefd-2d68-4c94-9058-3884d8e86fd9"
      },
      "date" : "2023-09-20T07:35:00+02:00",
      "author" : [{
        "reference" : "urn:uuid:6e493001-791e-448e-86e1-ac535d25c98b"
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
          "reference" : "urn:uuid:542f1f73-763c-4bff-ab1b-04d25f77fc55"
        }]
      }]
    }
  },
  {
    "fullUrl" : "urn:uuid:f6feaefd-2d68-4c94-9058-3884d8e86fd9",
    "resource" : {
      "resourceType" : "Patient",
      "id" : "f6feaefd-2d68-4c94-9058-3884d8e86fd9",
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
    "fullUrl" : "urn:uuid:6e493001-791e-448e-86e1-ac535d25c98b",
    "resource" : {
      "resourceType" : "Organization",
      "id" : "6e493001-791e-448e-86e1-ac535d25c98b",
      "identifier" : [{
        "system" : "urn:oid:2.51.1.3",
        "value" : "7601002331470"
      }],
      "name" : "SanLab"
    }
  },
  {
    "fullUrl" : "urn:uuid:542f1f73-763c-4bff-ab1b-04d25f77fc55",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "542f1f73-763c-4bff-ab1b-04d25f77fc55",
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
          "code" : "40988-8"
        }]
      },
      "subject" : {
        "reference" : "urn:uuid:f6feaefd-2d68-4c94-9058-3884d8e86fd9"
      },
      "effectiveDateTime" : "2023-09-19T17:50:00+02:00",
      "performer" : [{
        "reference" : "urn:uuid:6e493001-791e-448e-86e1-ac535d25c98b"
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
        "reference" : "urn:uuid:31e5de2d-71e4-4150-997c-3f9c9e70af13"
      }
    }
  },
  {
    "fullUrl" : "urn:uuid:9bb51532-2f32-4f9c-b369-0ecc7904a64b",
    "resource" : {
      "resourceType" : "Practitioner",
      "id" : "9bb51532-2f32-4f9c-b369-0ecc7904a64b",
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
    "fullUrl" : "urn:uuid:4111c240-51de-4795-952b-49ff2b3eb3f7",
    "resource" : {
      "resourceType" : "Organization",
      "id" : "4111c240-51de-4795-952b-49ff2b3eb3f7",
      "identifier" : [{
        "system" : "urn:oid:2.16.756.5.45",
        "value" : "A99684215"
      }],
      "name" : "A99684215 ABC",
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
    "fullUrl" : "urn:uuid:5ae16838-5907-4f9a-938e-ee4b5bbba89c",
    "resource" : {
      "resourceType" : "PractitionerRole",
      "id" : "5ae16838-5907-4f9a-938e-ee4b5bbba89c",
      "practitioner" : {
        "reference" : "urn:uuid:9bb51532-2f32-4f9c-b369-0ecc7904a64b"
      },
      "organization" : {
        "reference" : "urn:uuid:4111c240-51de-4795-952b-49ff2b3eb3f7"
      }
    }
  },
  {
    "fullUrl" : "urn:uuid:31e5de2d-71e4-4150-997c-3f9c9e70af13",
    "resource" : {
      "resourceType" : "Specimen",
      "id" : "31e5de2d-71e4-4150-997c-3f9c9e70af13",
      "type" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "447154002"
        }],
        "text" : "Specimen from nose"
      },
      "subject" : {
        "reference" : "urn:uuid:f6feaefd-2d68-4c94-9058-3884d8e86fd9"
      },
      "collection" : {
        "collectedDateTime" : "2023-09-19"
      }
    }
  },
  {
    "fullUrl" : "urn:uuid:73f2936f-6802-4b66-913f-575c878f84fe",
    "resource" : {
      "resourceType" : "ServiceRequest",
      "id" : "73f2936f-6802-4b66-913f-575c878f84fe",
      "identifier" : [{
        "value" : "26955847714"
      }],
      "status" : "completed",
      "intent" : "order",
      "code" : {
        "coding" : [{
          "system" : "http://loinc.org",
          "code" : "40988-8"
        }]
      },
      "subject" : {
        "reference" : "urn:uuid:f6feaefd-2d68-4c94-9058-3884d8e86fd9"
      },
      "requester" : {
        "reference" : "urn:uuid:5ae16838-5907-4f9a-938e-ee4b5bbba89c"
      },
      "specimen" : [{
        "reference" : "urn:uuid:31e5de2d-71e4-4150-997c-3f9c9e70af13"
      }]
    }
  },
  {
    "fullUrl" : "urn:uuid:f366ed1f-da72-447e-80ae-3e836cdf64c7",
    "resource" : {
      "resourceType" : "DiagnosticReport",
      "id" : "f366ed1f-da72-447e-80ae-3e836cdf64c7",
      "extension" : [{
        "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
        "valueReference" : {
          "reference" : "urn:uuid:c2f6cc2a-d28a-43d0-9fd1-cc20048bef1d"
        }
      }],
      "identifier" : [{
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:1901332d-6012-443f-9690-9291adb2cb3b"
      }],
      "basedOn" : [{
        "reference" : "urn:uuid:73f2936f-6802-4b66-913f-575c878f84fe"
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
        "reference" : "urn:uuid:f6feaefd-2d68-4c94-9058-3884d8e86fd9"
      },
      "performer" : [{
        "reference" : "urn:uuid:6e493001-791e-448e-86e1-ac535d25c98b"
      }],
      "specimen" : [{
        "reference" : "urn:uuid:31e5de2d-71e4-4150-997c-3f9c9e70af13"
      }],
      "result" : [{
        "reference" : "urn:uuid:542f1f73-763c-4bff-ab1b-04d25f77fc55"
      }]
    }
  }]
}

```
