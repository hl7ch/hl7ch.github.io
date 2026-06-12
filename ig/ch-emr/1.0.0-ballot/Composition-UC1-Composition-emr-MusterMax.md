# UC1-Composition-emr-MusterMax - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC1-Composition-emr-MusterMax**

## Example Composition: UC1-Composition-emr-MusterMax

Language: de-CH

Profile: [CH Emergency Record Composition](StructureDefinition-ch-emr-composition.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/7.1.0/NamingSystem-uri.html)/urn:uuid:11111111-aaaa-4111-8111-111111111111

**status**: Final

**type**: Patient summary Document

**date**: 2026-06-02 08:00:00+0200

**author**: [PractitionerRole Physician](PractitionerRole-UC1-PractitionerRole-Hausarzt.md)

**title**: Elektronischer Notfallpass — Muster Max

**confidentiality**: normal



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "UC1-Composition-emr-MusterMax",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:11111111-aaaa-4111-8111-111111111111"
  },
  "status" : "final",
  "type" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "60591-5"
    }]
  },
  "subject" : {
    "reference" : "Patient/UC1-Patient-MusterMax"
  },
  "date" : "2026-06-02T08:00:00+02:00",
  "author" : [{
    "reference" : "PractitionerRole/UC1-PractitionerRole-Hausarzt"
  }],
  "title" : "Elektronischer Notfallpass — Muster Max",
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Muster Vreni (Ehefrau): +41 78 876 54 32, Kommunikationssprache: Deutsch</li></ul></div>"
    },
    "entry" : [{
      "reference" : "RelatedPerson/UC1-RelatedPerson-VreniMuster"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Dr. med. UC1 Hausarzt</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Practitioner/UC1-Practitioner-Hausarzt"
    },
    {
      "reference" : "PractitionerRole/UC1-PractitionerRole-Hausarzt"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Reanimationsstatus folgt aus der ärztlichen Notanordnung 2024 und der Patientenverfügung 2022.</p></div>"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Beloc Zok 50 mg (Metoprolol), 1-0-0.5-0 — Bluthochdruck</li><li>Plavix 75 mg (Clopidogrel), 1-0-0-0 — Prophylaxe Schlaganfall</li></ul></div>"
    },
    "entry" : [{
      "reference" : "MedicationStatement/UC1-MedicationStatement-BelocZok"
    },
    {
      "reference" : "MedicationStatement/UC1-MedicationStatement-Plavix"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine Allergien bekannt.</p></div>"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>2015 Koronare Herzkrankheit</li><li>2016 Hypertonie</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Condition/UC1-Condition-KoronareHerzkrankheit"
    },
    {
      "reference" : "Condition/UC1-Condition-Hypertonie"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Ärztliche Notanordnung 2024 (EPD)</li><li>Patientenverfügung 2022 (Hausarzt)</li></ul></div>"
    },
    "entry" : [{
      "reference" : "DocumentReference/UC1-DocumentReference-Notanordnung"
    },
    {
      "reference" : "DocumentReference/UC1-DocumentReference-Patientenverfuegung"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Schrittmacherausweis 2015 (EPD)</li></ul></div>"
    },
    "entry" : [{
      "reference" : "DocumentReference/UC1-DocumentReference-Schrittmacherausweis"
    }]
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Herzschrittmacher (implantiert 2015)</li></ul></div>"
    },
    "entry" : [{
      "reference" : "DeviceUseStatement/UC1-DeviceUseStatement-Pacemaker"
    }]
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine bekannt.</p></div>"
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
    "title" : "Physische Beeinträchtigungen",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "96386-8"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine bekannt.</p></div>"
    },
    "emptyReason" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
        "code" : "nilknown",
        "display" : "Nil Known"
      }]
    }
  }]
}

```
