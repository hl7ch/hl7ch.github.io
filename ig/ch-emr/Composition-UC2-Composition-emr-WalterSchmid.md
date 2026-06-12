# UC2-Composition-emr-WalterSchmid - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC2-Composition-emr-WalterSchmid**

## Example Composition: UC2-Composition-emr-WalterSchmid

Language: de-CH

Profile: [CH Emergency Record Composition](StructureDefinition-ch-emr-composition.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/7.1.0/NamingSystem-uri.html)/urn:uuid:22222222-aaaa-4222-8222-222222222222

**status**: Final

**type**: Patient summary Document

**date**: 2026-06-02 08:00:00+0200

**author**: [PractitionerRole Physician](PractitionerRole-UC2-PractitionerRole-Hausarzt.md)

**title**: Elektronischer Notfallpass — Walter Schmid

**confidentiality**: normal



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "UC2-Composition-emr-WalterSchmid",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:22222222-aaaa-4222-8222-222222222222"
  },
  "status" : "final",
  "type" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "60591-5"
    }]
  },
  "subject" : {
    "reference" : "Patient/UC2-Patient-WalterSchmid"
  },
  "date" : "2026-06-02T08:00:00+02:00",
  "author" : [{
    "reference" : "PractitionerRole/UC2-PractitionerRole-Hausarzt"
  }],
  "title" : "Elektronischer Notfallpass — Walter Schmid",
  "confidentiality" : "N",
  "_confidentiality" : {
    "extension" : [{
      "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-epr-confidentialitycode",
      "valueCodeableConcept" : {
        "coding" : [{
          "system" : "http://snomed.info/sct",
          "version" : "http://snomed.info/sct/2011000195101",
          "code" : "17621005"
        }]
      }
    }]
  },
  "section" : [{
    "title" : "Notfallkontakte",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "56864-2"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Spitex Luzern (Pflegedienst): +41 41 555 00 00</li></ul></div>"
    },
    "entry" : [{
      "reference" : "RelatedPerson/UC2-RelatedPerson-Spitex"
    }]
  },
  {
    "title" : "Behandelnde Gesundheitsfachperson",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "85847-2"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Dr. med. UC2 Hausarzt</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Practitioner/UC2-Practitioner-Hausarzt"
    },
    {
      "reference" : "PractitionerRole/UC2-PractitionerRole-Hausarzt"
    }]
  },
  {
    "title" : "Reanimationsstatus",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "100822-6"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keinen Reanimationsstatus erfasst; siehe Patientenverfügung 2022.</p></div>"
    },
    "emptyReason" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
        "code" : "unavailable",
        "display" : "Information not available"
      }]
    }
  },
  {
    "title" : "Medikation",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "10160-0"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Aspirin cardio 100 mg, 1-0-0-0 — Status nach Schlaganfall</li><li>Atorvastatin 40 mg, 0-0-1-0 — Status nach Schlaganfall (vaskulär bedingt)</li><li>Xigduo XR 1000/5 mg (Metformin/Dapagliflozin), 0-0-2-0 — Diabetes</li><li>Epril 20 mg (Enalapril), 1-0-0-0 — Bluthochdruck</li></ul></div>"
    },
    "entry" : [{
      "reference" : "MedicationStatement/UC2-MedicationStatement-AspirinCardio"
    },
    {
      "reference" : "MedicationStatement/UC2-MedicationStatement-Atorvastatin"
    },
    {
      "reference" : "MedicationStatement/UC2-MedicationStatement-XigduoXR"
    },
    {
      "reference" : "MedicationStatement/UC2-MedicationStatement-Epril"
    }]
  },
  {
    "title" : "Impfungen",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "11369-6"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine Impfungen dokumentiert.</p></div>"
    },
    "emptyReason" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
        "code" : "unavailable",
        "display" : "Information not available"
      }]
    }
  },
  {
    "title" : "Allergien oder Unverträglichkeiten",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "48765-2"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Penicillin — Reaktion: Atemnot</li></ul></div>"
    },
    "entry" : [{
      "reference" : "AllergyIntolerance/UC2-AllergyIntolerance-Penicillin"
    }]
  },
  {
    "title" : "Risiken für Behandelnde",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "46467-7"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine Risikofaktoren bekannt.</p></div>"
    },
    "emptyReason" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
        "code" : "unavailable",
        "display" : "Information not available"
      }]
    }
  },
  {
    "title" : "Probleme und Diagnosen",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "11450-4"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>2023 Schlaganfall</li><li>1969 Status nach Splenektomie</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Condition/UC2-Condition-Schlaganfall"
    },
    {
      "reference" : "Condition/UC2-Condition-Splenektomie"
    }]
  },
  {
    "title" : "Patientenverfügungen und Ärztliche Notfallanordnung",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "42348-3"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Patientenverfügung 2022 (Hausarzt)</li></ul></div>"
    },
    "entry" : [{
      "reference" : "DocumentReference/UC2-DocumentReference-Patientenverfuegung"
    }]
  },
  {
    "title" : "Andere Dokumente",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "55108-5"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine zusätzlichen Dokumente hinterlegt.</p></div>"
    },
    "emptyReason" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
        "code" : "unavailable",
        "display" : "Information not available"
      }]
    }
  },
  {
    "title" : "Implantate",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "46264-8"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine medizinischen Geräte dokumentiert.</p></div>"
    },
    "emptyReason" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
        "code" : "nilknown",
        "display" : "Nil Known"
      }]
    }
  },
  {
    "title" : "Schwangerschaft",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "10162-6"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Nicht zutreffend.</p></div>"
    },
    "emptyReason" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
        "code" : "notasked",
        "display" : "Not Asked"
      }]
    }
  },
  {
    "title" : "Kognitive Beeinträchtigungen",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "66610-7"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Wachheitszustand wechselhaft (akut, fieberbedingt).</p></div>"
    },
    "emptyReason" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
        "code" : "unavailable",
        "display" : "Information not available"
      }]
    }
  },
  {
    "title" : "Physische Beeinträchtigungen",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "96386-8"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Aphasie nach Schlaganfall</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Observation/UC2-PhysicalDisability-Aphasie"
    }]
  }]
}

```
