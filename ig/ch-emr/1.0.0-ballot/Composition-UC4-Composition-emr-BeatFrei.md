# UC4-Composition-emr-BeatFrei - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **UC4-Composition-emr-BeatFrei**

## Example Composition: UC4-Composition-emr-BeatFrei

Language: de-CH

Profile: [CH Emergency Record Composition](StructureDefinition-ch-emr-composition.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/7.1.0/NamingSystem-uri.html)/urn:uuid:44444444-aaaa-4444-8444-444444444444

**status**: Final

**type**: Patient summary Document

**date**: 2026-06-02 08:00:00+0200

**author**: [PractitionerRole Physician](PractitionerRole-UC4-PractitionerRole-Hausarzt.md)

**title**: Elektronischer Notfallpass — Beat Frei

**confidentiality**: normal



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "UC4-Composition-emr-BeatFrei",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:44444444-aaaa-4444-8444-444444444444"
  },
  "status" : "final",
  "type" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "60591-5"
    }]
  },
  "subject" : {
    "reference" : "Patient/UC4-Patient-BeatFrei"
  },
  "date" : "2026-06-02T08:00:00+02:00",
  "author" : [{
    "reference" : "PractitionerRole/UC4-PractitionerRole-Hausarzt"
  }],
  "title" : "Elektronischer Notfallpass — Beat Frei",
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Sandra Frei (Ehefrau): +41 79 555 33 44</li></ul></div>"
    },
    "entry" : [{
      "reference" : "RelatedPerson/UC4-RelatedPerson-Ehefrau"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Dr. med. UC4 Hausarzt</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Practitioner/UC4-Practitioner-Hausarzt"
    },
    {
      "reference" : "PractitionerRole/UC4-PractitionerRole-Hausarzt"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Kein Reanimationsstatus erfasst.</p></div>"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Bilol 5 mg (Bisoprolol), 1-0-0-0 — Blutdrucksenkung bei Aortenaneurysma</li></ul></div>"
    },
    "entry" : [{
      "reference" : "MedicationStatement/UC4-MedicationStatement-Bilol"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>2024 Aortenaneurysma</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Condition/UC4-Condition-Aortenaneurysma"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Keine Patientenverfügung hinterlegt.</p></div>"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Rezidivierende Lumbalgien (anamnestisch).</p></div>"
    },
    "emptyReason" : {
      "coding" : [{
        "system" : "http://terminology.hl7.org/CodeSystem/list-empty-reason",
        "code" : "unavailable",
        "display" : "Information not available"
      }]
    }
  }]
}

```
