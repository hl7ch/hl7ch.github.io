# EX-Composition - CH EMR (R4) v1.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EX-Composition**

## Example Composition: EX-Composition

Language: de-CH

Profile: [CH Emergency Record Composition](StructureDefinition-ch-emr-composition.md)

**identifier**: [Uniform Resource Identifier (URI)](http://terminology.hl7.org/7.1.0/NamingSystem-uri.html)/urn:uuid:7afc1e97-67f8-49a8-91f5-46af596d0609

**status**: Final

**type**: Patient summary Document

**date**: 2025-09-10 08:00:00+0200

**author**: [PractitionerRole Physician](PractitionerRole-EX-PractitionerRole.md)

**title**: Elektronischer Notfallpass - Maria Schmidt

**confidentiality**: normal



## Resource Content

```json
{
  "resourceType" : "Composition",
  "id" : "EX-Composition",
  "meta" : {
    "profile" : ["http://fhir.ch/ig/ch-emr/StructureDefinition/ch-emr-composition"]
  },
  "language" : "de-CH",
  "identifier" : {
    "system" : "urn:ietf:rfc:3986",
    "value" : "urn:uuid:7afc1e97-67f8-49a8-91f5-46af596d0609"
  },
  "status" : "final",
  "type" : {
    "coding" : [{
      "system" : "http://loinc.org",
      "code" : "60591-5"
    }]
  },
  "subject" : {
    "reference" : "Patient/EX-Patient"
  },
  "date" : "2025-09-10T08:00:00+02:00",
  "author" : [{
    "reference" : "PractitionerRole/EX-PractitionerRole"
  }],
  "title" : "Elektronischer Notfallpass - Maria Schmidt",
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Peter Schmidt (Ehemann) +41 44 321 65 87</p></div>"
    },
    "entry" : [{
      "reference" : "RelatedPerson/EX-RelatedPerson"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Dr. med. SarahHuber - Gynecologist (GLN: 7601007922000)</p></div>"
    },
    "entry" : [{
      "reference" : "Practitioner/EX-Practitioner"
    }]
  },
  {
    "title" : "Reanimation",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "100822-6"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Reanimationsstatus:</p><ul><li>For attempted cardiopulmonary resuscitation</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Observation/EX-Resuscitation"
    }]
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Metformin 500mg 1-0-1</li></ul></div>"
    },
    "entry" : [{
      "reference" : "MedicationStatement/EX-MedicationStatement"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>COVID-19: 12.09.2024</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Immunization/EX-Immunization"
    }]
  },
  {
    "title" : "Allergien und Unverträglichkeiten",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "48765-2"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Kontrastmittelallergie</li></ul></div>"
    },
    "entry" : [{
      "reference" : "AllergyIntolerance/EX-AllergyIntolerance"
    }]
  },
  {
    "title" : "Risikofaktoren für Behandelnde",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "46467-7"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Viral hepatitis type B</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Flag/EX-RiskFactor"
    }]
  },
  {
    "title" : "Problemliste",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "11450-4"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Diabetes mellitus Typ 2</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Condition/EX-Condition"
    }]
  },
  {
    "title" : "Patientenverfügung und Ärztliche Notfallanordnungen",
    "code" : {
      "coding" : [{
        "system" : "http://loinc.org",
        "code" : "42348-3"
      }]
    },
    "text" : {
      "status" : "generated",
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Patientenverfügung:</p><ul><li>Patientenverfügung im Schlafzimmer</li></ul></div>"
    },
    "entry" : [{
      "reference" : "DocumentReference/EX-AdvanceDirective"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Organspendeausweis: Organspendeausweis ist im Portemonnaie</li></ul></div>"
    },
    "entry" : [{
      "reference" : "DocumentReference/EX-DocumentReferences"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Implantate:</p><ul><li>Herzschrittmacher</li></ul></div>"
    },
    "entry" : [{
      "reference" : "DeviceUseStatement/EX-DeviceUseStatement"
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><p>Schwangerschaft:</p><ul><li>Ja</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Observation/EX-Pregnancy"
    }]
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Demenz</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Observation/EX-CognitiveDisability"
    }]
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
      "div" : "<div xmlns=\"http://www.w3.org/1999/xhtml\"><ul><li>Gehbehinderung</li></ul></div>"
    },
    "entry" : [{
      "reference" : "Observation/EX-PhysicalDisability"
    }]
  }]
}

```
