# CH EPREG Patient: Mother - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH EPREG Patient: Mother**

## Resource Profile: CH EPREG Patient: Mother 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-mother | *Version*:1.0.0 |
| Active as of 2025-12-16 | *Computable Name*:ChEpregPatientMother |
| **Copyright/Legal**: CC0-1.0 | |

 
This profile constrains the Patient resource to represent the pregnant individual. 

**Usages:**

* Refer to this Profile: [CH EPREG Appointment: Next Examination](StructureDefinition-ch-epreg-appointment-next-examination.md), [CH EPREG Composition](StructureDefinition-ch-epreg-composition.md), [CH EPREG Coverage](StructureDefinition-ch-epreg-coverage.md), [CH EPREG Encounter: Mother](StructureDefinition-ch-epreg-encounter-mother.md)...Show 10 more,[CH EPREG Observation (Mother): Abdominal Circumference](StructureDefinition-ch-epreg-observation-abdominal-circumference.md),[CH EPREG Observation (Mother): Blood Pressure](StructureDefinition-ch-epreg-observation-blood-pressure.md),[CH EPREG Observation (Mother): Body Weight](StructureDefinition-ch-epreg-observation-body-weight.md),[CH EPREG Observation (Mother): Fundus Height](StructureDefinition-ch-epreg-observation-fundus-height.md),[CH EPREG Observation (Mother): Gestational Age in Days](StructureDefinition-ch-epreg-observation-gestational-age-in-days.md),[CH EPREG Observation (Base): Pregnancy Progress](StructureDefinition-ch-epreg-observation-preg-progress.md),[CH EPREG Observation (Base): Results Laboratory](StructureDefinition-ch-epreg-observation-results-lab.md),[CH EPREG Observation (Mother): Urine Finding](StructureDefinition-ch-epreg-observation-urine-finding.md),[CH EPREG Observation (Mother): Vagina Feature](StructureDefinition-ch-epreg-observation-vagina-feature.md)and[CH EPREG Observation (Mother): Weight Gain](StructureDefinition-ch-epreg-observation-weight-gain.md)

You can also check for [usages in the FHIR IG Statistics](https://packages2.fhir.org/xig/ch.fhir.ig.ch-epreg|current/StructureDefinition/ch-epreg-patient-mother)

### Formal Views of Profile Content

 [Description of Profiles, Differentials, Snapshots and how the different presentations work](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#structure-definitions). 

 

Other representations of profile: [CSV](StructureDefinition-ch-epreg-patient-mother.csv), [Excel](StructureDefinition-ch-epreg-patient-mother.xlsx), [Schematron](StructureDefinition-ch-epreg-patient-mother.sch) 



## Resource Content

```json
{
  "resourceType" : "StructureDefinition",
  "id" : "ch-epreg-patient-mother",
  "url" : "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-patient-mother",
  "version" : "1.0.0",
  "name" : "ChEpregPatientMother",
  "title" : "CH EPREG Patient: Mother",
  "status" : "active",
  "date" : "2025-12-16T12:16:11+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/"
        }
      ]
    }
  ],
  "description" : "This profile constrains the Patient resource to represent the pregnant individual.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CHE"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "fhirVersion" : "4.0.1",
  "mapping" : [
    {
      "identity" : "concept-pregnancy-passport",
      "uri" : "https://www.e-health-suisse.ch/upload/documents/eSchwangerschaftspass_Konzept_de.pdf",
      "name" : "Concept Pregnancy Passport",
      "comment" : "This mapping illustrates the relationship between the CH EPREG profile and the concept of the pregnancy passport."
    },
    {
      "identity" : "eCH",
      "uri" : "http://www.ech.ch/",
      "name" : "eCH-Standards"
    },
    {
      "identity" : "rim",
      "uri" : "http://hl7.org/v3",
      "name" : "RIM Mapping"
    },
    {
      "identity" : "cda",
      "uri" : "http://hl7.org/v3/cda",
      "name" : "CDA (R2)"
    },
    {
      "identity" : "w5",
      "uri" : "http://hl7.org/fhir/fivews",
      "name" : "FiveWs Pattern Mapping"
    },
    {
      "identity" : "v2",
      "uri" : "http://hl7.org/v2",
      "name" : "HL7 v2 Mapping"
    },
    {
      "identity" : "loinc",
      "uri" : "http://loinc.org",
      "name" : "LOINC code for the element"
    }
  ],
  "kind" : "resource",
  "abstract" : false,
  "type" : "Patient",
  "baseDefinition" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-patient-epr",
  "derivation" : "constraint",
  "differential" : {
    "element" : [
      {
        "id" : "Patient",
        "path" : "Patient",
        "short" : "CH EPREG Patient: Mother",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Schwangere Person | Personne enceinte"
          }
        ]
      },
      {
        "id" : "Patient.extension:citizenship",
        "path" : "Patient.extension",
        "sliceName" : "citizenship",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Nationalität | Nationalité"
          }
        ]
      },
      {
        "id" : "Patient.extension:pronoun",
        "path" : "Patient.extension",
        "sliceName" : "pronoun",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/individual-pronouns|5.3.0-ballot-tc1"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Pronomen | Pronoms"
          }
        ]
      },
      {
        "id" : "Patient.identifier:AHVN13",
        "path" : "Patient.identifier",
        "sliceName" : "AHVN13",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "AHV-Nummer | Numéro AVS"
          }
        ]
      },
      {
        "id" : "Patient.name",
        "path" : "Patient.name",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Name | Nom"
          }
        ]
      },
      {
        "id" : "Patient.name.text",
        "path" : "Patient.name.text",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Vollständiger Name | Nom complet"
          }
        ]
      },
      {
        "id" : "Patient.name.family",
        "path" : "Patient.name.family",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Nachname | Nom de famille"
          }
        ]
      },
      {
        "id" : "Patient.name.given",
        "path" : "Patient.name.given",
        "min" : 1,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Vorname | Prénoms"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Andere Vornamen (Namenszusatz) | Autres prénoms"
          }
        ]
      },
      {
        "id" : "Patient.telecom:email",
        "path" : "Patient.telecom",
        "sliceName" : "email",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "E-Mailadresse | Courriel"
          }
        ]
      },
      {
        "id" : "Patient.telecom:phone",
        "path" : "Patient.telecom",
        "sliceName" : "phone",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Telefon | N° de téléphone"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "use = home: Festnetz | Fixe"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "use = mobile: Mobil | Mobile"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "use = work: Arbeit | Professionnel"
          }
        ]
      },
      {
        "id" : "Patient.birthDate",
        "path" : "Patient.birthDate",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Geburtsdatum | Date de naissance"
          }
        ]
      },
      {
        "id" : "Patient.address",
        "path" : "Patient.address",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Adresse | Adresse"
          }
        ]
      },
      {
        "id" : "Patient.address.line",
        "path" : "Patient.address.line",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Strasse | Rue"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Hausnummer | Numéro"
          }
        ]
      },
      {
        "id" : "Patient.address.city",
        "path" : "Patient.address.city",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Ort | Localité"
          }
        ]
      },
      {
        "id" : "Patient.address.postalCode",
        "path" : "Patient.address.postalCode",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Postleitzahl | Code postal"
          }
        ]
      },
      {
        "id" : "Patient.address.country",
        "path" : "Patient.address.country",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Land | Pays"
          }
        ]
      },
      {
        "id" : "Patient.contact:emergency",
        "path" : "Patient.contact",
        "sliceName" : "emergency",
        "min" : 0,
        "max" : "*",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Notfallkontakt | Contact en cas d’urgence"
          }
        ]
      },
      {
        "id" : "Patient.contact:emergency.extension",
        "path" : "Patient.contact.extension",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "url"
            }
          ],
          "ordered" : false,
          "rules" : "open"
        }
      },
      {
        "id" : "Patient.contact:emergency.extension:contactPriority",
        "path" : "Patient.contact.extension",
        "sliceName" : "contactPriority",
        "short" : "Indicates the priority of the contact person (e.g. 1 = primary contact for an emergency)",
        "min" : 0,
        "max" : "1",
        "type" : [
          {
            "code" : "Extension",
            "profile" : [
              "http://hl7.org/fhir/StructureDefinition/patient-contactPriority|5.3.0-ballot-tc1"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Primärkontakt | Contact principal"
          }
        ]
      },
      {
        "id" : "Patient.contact:emergency.relationship",
        "path" : "Patient.contact.relationship",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v2-0131",
              "code" : "C"
            }
          ]
        }
      },
      {
        "id" : "Patient.contact:emergency.name",
        "path" : "Patient.contact.name",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Name | Nom"
          }
        ]
      },
      {
        "id" : "Patient.contact:emergency.name.family",
        "path" : "Patient.contact.name.family",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Nachname | Nom"
          }
        ]
      },
      {
        "id" : "Patient.contact:emergency.name.given",
        "path" : "Patient.contact.name.given",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Vorname | Prénom"
          }
        ]
      },
      {
        "id" : "Patient.contact:emergency.telecom",
        "path" : "Patient.contact.telecom",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Patient.contact:emergency.telecom.system",
        "path" : "Patient.contact.telecom.system",
        "min" : 1
      },
      {
        "id" : "Patient.contact:emergency.telecom.value",
        "path" : "Patient.contact.telecom.value",
        "min" : 1
      },
      {
        "id" : "Patient.contact:emergency.telecom:phone",
        "path" : "Patient.contact.telecom",
        "sliceName" : "phone",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-phone"
            ]
          }
        ],
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Telefon | N° de téléphone"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "use = home: Festnetz | Fixe"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "use = mobile: Mobil | Mobile"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "use = work: Arbeit | Professionnel"
          }
        ]
      },
      {
        "id" : "Patient.contact:guardian",
        "path" : "Patient.contact",
        "sliceName" : "guardian",
        "min" : 0,
        "max" : "*",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Beistand/Vormund | Curatelle/tutelle"
          }
        ]
      },
      {
        "id" : "Patient.contact:guardian.relationship",
        "path" : "Patient.contact.relationship",
        "min" : 1,
        "patternCodeableConcept" : {
          "coding" : [
            {
              "system" : "http://terminology.hl7.org/CodeSystem/v3-RoleCode",
              "code" : "GUARD"
            }
          ]
        }
      },
      {
        "id" : "Patient.contact:guardian.name",
        "path" : "Patient.contact.name",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Name | Nom"
          }
        ]
      },
      {
        "id" : "Patient.contact:guardian.name.family",
        "path" : "Patient.contact.name.family",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Nachname | Nom"
          }
        ]
      },
      {
        "id" : "Patient.contact:guardian.name.given",
        "path" : "Patient.contact.name.given",
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Vorname | Prénom"
          }
        ]
      },
      {
        "id" : "Patient.contact:guardian.telecom",
        "path" : "Patient.contact.telecom",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "system"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Patient.contact:guardian.telecom.system",
        "path" : "Patient.contact.telecom.system",
        "min" : 1
      },
      {
        "id" : "Patient.contact:guardian.telecom.value",
        "path" : "Patient.contact.telecom.value",
        "min" : 1
      },
      {
        "id" : "Patient.contact:guardian.telecom:email",
        "path" : "Patient.contact.telecom",
        "sliceName" : "email",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-email"
            ]
          }
        ],
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "E-Mailadresse | Courriel"
          }
        ]
      },
      {
        "id" : "Patient.contact:guardian.telecom:phone",
        "path" : "Patient.contact.telecom",
        "sliceName" : "phone",
        "min" : 0,
        "max" : "*",
        "type" : [
          {
            "code" : "ContactPoint",
            "profile" : [
              "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-contactpoint-ech-46-phone"
            ]
          }
        ],
        "mustSupport" : true,
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Telefon | N° de téléphone"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "use = home: Festnetz | Fixe"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "use = mobile: Mobil | Mobile"
          },
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "use = work: Arbeit | Professionnel"
          }
        ]
      },
      {
        "id" : "Patient.communication",
        "path" : "Patient.communication",
        "mapping" : [
          {
            "identity" : "concept-pregnancy-passport",
            "map" : "Kommunikationssprache | Langue de communication"
          }
        ]
      },
      {
        "id" : "Patient.link",
        "path" : "Patient.link",
        "slicing" : {
          "discriminator" : [
            {
              "type" : "value",
              "path" : "type"
            }
          ],
          "rules" : "open"
        }
      },
      {
        "id" : "Patient.link:child",
        "path" : "Patient.link",
        "sliceName" : "child",
        "short" : "Link to the mother's RelatedPerson resource pointing to the child's Patient resource",
        "min" : 0,
        "max" : "*"
      },
      {
        "id" : "Patient.link:child.other",
        "path" : "Patient.link.other",
        "short" : "The mother's RelatedPerson resource",
        "type" : [
          {
            "extension" : [
              {
                "url" : "http://hl7.org/fhir/StructureDefinition/structuredefinition-hierarchy",
                "valueBoolean" : false
              }
            ],
            "code" : "Reference",
            "targetProfile" : [
              "http://fhir.ch/ig/ch-epreg/StructureDefinition/ch-epreg-relatedperson-mother"
            ]
          }
        ]
      },
      {
        "id" : "Patient.link:child.other.reference",
        "path" : "Patient.link.other.reference",
        "min" : 1
      },
      {
        "id" : "Patient.link:child.type",
        "path" : "Patient.link.type",
        "patternCode" : "seealso"
      }
    ]
  }
}

```
