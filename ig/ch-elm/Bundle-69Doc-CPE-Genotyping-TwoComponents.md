# 69Doc - CPE Genotyping with Observation Value - CH ELM (R4) v1.15.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **69Doc - CPE Genotyping with Observation Value**

## Example Bundle: 69Doc - CPE Genotyping with Observation Value



## Resource Content

```json
{
  "resourceType" : "Bundle",
  "id" : "69Doc-CPE-Genotyping-TwoComponents",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:b9a8b9ee-9157-44af-b46e-9fef3c69d6bd"
  },
  "type" : "document",
  "timestamp" : "2026-01-17T12:00:00+02:00",
  "entry" : [{
    "fullUrl" : "http://test.fhir.ch/r4/Composition/69Comp-Genotyping-TwoComponents",
    "resource" : {
      "resourceType" : "Composition",
      "id" : "69Comp-Genotyping-TwoComponents",
      "language" : "de-CH",
      "identifier" : {
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:b9a8b9ee-9157-44af-b46e-9fef3c69d6bd"
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
        "reference" : "Patient/68Pat"
      },
      "date" : "2026-01-17T12:00:00+02:00",
      "author" : [{
        "reference" : "Organization/1Org-Labor"
      }],
      "title" : "Laborbericht vom 17.1.2026",
      "section" : [{
        "title" : "Analyseergebnisse der CPE Resistenzbestimmung",
        "code" : {
          "coding" : [{
            "system" : "http://snomed.info/sct",
            "code" : "726528006",
            "display" : "Genotyping (qualifier value)"
          }]
        },
        "entry" : [{
          "reference" : "Observation/69Obs-Genotyping-TwoComponents"
        }]
      }]
    }
  },
  {
    "fullUrl" : "http://test.fhir.ch/r4/DiagnosticReport/69DR-Genotyping-TwoComponents",
    "resource" : {
      "resourceType" : "DiagnosticReport",
      "id" : "69DR-Genotyping-TwoComponents",
      "extension" : [{
        "url" : "http://hl7.org/fhir/5.0/StructureDefinition/extension-DiagnosticReport.composition",
        "valueReference" : {
          "reference" : "Composition/69Comp-Genotyping-TwoComponents"
        }
      }],
      "identifier" : [{
        "system" : "urn:ietf:rfc:3986",
        "value" : "urn:uuid:b9a8b9ee-9157-44af-b46e-9fef3c69d6bd"
      }],
      "basedOn" : [{
        "reference" : "ServiceRequest/69SR-Genotyping-TwoComponents"
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
        "reference" : "Patient/68Pat"
      },
      "performer" : [{
        "reference" : "Organization/1Org-Labor"
      }],
      "specimen" : [{
        "reference" : "Specimen/69Spec-Genotyping-TwoComponents"
      }],
      "result" : [{
        "reference" : "Observation/69Obs-Genotyping-TwoComponents"
      }]
    }
  },
  {
    "fullUrl" : "http://test.fhir.ch/r4/Patient/68Pat",
    "resource" : {
      "resourceType" : "Patient",
      "id" : "68Pat",
      "identifier" : [{
        "system" : "urn:oid:2.16.756.5.32",
        "value" : "7561234567897"
      }],
      "name" : [{
        "family" : "Lirena",
        "given" : ["Vostarel"]
      }],
      "telecom" : [{
        "system" : "phone",
        "value" : "077000000"
      }],
      "gender" : "female",
      "birthDate" : "1981-02-07",
      "address" : [{
        "use" : "home",
        "line" : ["Staginabet 2"],
        "_line" : [{
          "extension" : [{
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-streetName",
            "valueString" : "Staginabet"
          },
          {
            "url" : "http://hl7.org/fhir/StructureDefinition/iso21090-ADXP-houseNumber",
            "valueString" : "2"
          }]
        }],
        "city" : "Carouge",
        "state" : "GE",
        "postalCode" : "1227",
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
    "fullUrl" : "http://test.fhir.ch/r4/Observation/69Obs-Genotyping-TwoComponents",
    "resource" : {
      "resourceType" : "Observation",
      "id" : "69Obs-Genotyping-TwoComponents",
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
          "code" : "737528008",
          "display" : "Carbapenemase-producing Escherichia coli (organism)"
        }]
      },
      "subject" : {
        "reference" : "Patient/68Pat"
      },
      "effectiveDateTime" : "2026-01-17T14:20:00+02:00",
      "performer" : [{
        "reference" : "Organization/1Org-Labor"
      }],
      "specimen" : {
        "reference" : "Specimen/69Spec-Genotyping-TwoComponents"
      },
      "component" : [{
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "85503-1",
            "display" : "Carbapenem resistance blaOXA-48 gene [Presence] by Molecular method"
          }]
        },
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
        }]
      },
      {
        "code" : {
          "coding" : [{
            "system" : "http://loinc.org",
            "code" : "85501-5",
            "display" : "Carbapenem resistance blaVIM gene [Presence] by Molecular method"
          }]
        },
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
        }]
      }]
    }
  },
  {
    "fullUrl" : "http://test.fhir.ch/r4/Specimen/69Spec-Genotyping-TwoComponents",
    "resource" : {
      "resourceType" : "Specimen",
      "id" : "69Spec-Genotyping-TwoComponents",
      "type" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "258527002",
          "display" : "Anal swab (specimen)"
        }]
      },
      "subject" : {
        "reference" : "Patient/68Pat"
      },
      "collection" : {
        "collectedDateTime" : "2026-01-15T14:20:00+02:00"
      }
    }
  },
  {
    "fullUrl" : "http://test.fhir.ch/r4/ServiceRequest/69SR-Genotyping-TwoComponents",
    "resource" : {
      "resourceType" : "ServiceRequest",
      "id" : "69SR-Genotyping-TwoComponents",
      "identifier" : [{
        "value" : "36500923675"
      }],
      "status" : "completed",
      "intent" : "order",
      "code" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "code" : "737528008",
          "display" : "Carbapenemase-producing Escherichia coli (organism)"
        }]
      },
      "subject" : {
        "reference" : "Patient/68Pat"
      },
      "requester" : {
        "reference" : "PractitionerRole/PR-PeterHauser"
      },
      "specimen" : [{
        "reference" : "Specimen/69Spec-Genotyping-TwoComponents"
      }]
    }
  },
  {
    "fullUrl" : "http://test.fhir.ch/r4/Organization/1Org-Labor",
    "resource" : {
      "resourceType" : "Organization",
      "id" : "1Org-Labor",
      "identifier" : [{
        "system" : "urn:oid:2.51.1.3",
        "value" : "7601002331470"
      }],
      "name" : "SanLab"
    }
  },
  {
    "fullUrl" : "http://test.fhir.ch/r4/PractitionerRole/PR-PeterHauser",
    "resource" : {
      "resourceType" : "PractitionerRole",
      "id" : "PR-PeterHauser",
      "practitioner" : {
        "reference" : "Practitioner/Pract-PeterHauser"
      },
      "organization" : {
        "reference" : "Organization/Org-PeterHauser"
      }
    }
  },
  {
    "fullUrl" : "http://test.fhir.ch/r4/Practitioner/Pract-PeterHauser",
    "resource" : {
      "resourceType" : "Practitioner",
      "id" : "Pract-PeterHauser",
      "identifier" : [{
        "system" : "urn:oid:2.51.1.3",
        "value" : "7601000000514"
      }],
      "name" : [{
        "family" : "Hauser",
        "given" : ["Peter"]
      }],
      "telecom" : [{
        "system" : "email",
        "value" : "peter.hauser@hauserpraxis.ch"
      },
      {
        "system" : "phone",
        "value" : "+41 79 222 33 44"
      }]
    }
  },
  {
    "fullUrl" : "http://test.fhir.ch/r4/Organization/Org-PeterHauser",
    "resource" : {
      "resourceType" : "Organization",
      "id" : "Org-PeterHauser",
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
  }]
}

```
