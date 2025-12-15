# DocumentEntry.healthcareFacilityTypeCode - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **DocumentEntry.healthcareFacilityTypeCode**

## ValueSet: DocumentEntry.healthcareFacilityTypeCode 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.healthcareFacilityTypeCode | *Version*:3.3.0 |
| Active as of 2025-12-01 | *Computable Name*:DocumentEntryHealthcareFacilityTypeCode |
| *Other Identifiers:*OID:2.16.756.5.30.1.127.3.10.1.11 (use: official, ) | |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
Type of healthcare facility as per Annex 3; EPRO-FDHA. This code describes the type of healthcare facility in which the document was compiled during the treatment process. In conjunction with the authorisation control, the patient can use this information to assign all documents from a specific type of healthcare facility to a specific confidentiality level in their rights and attributes, for example. 

 **References** 

 Detailed information about the **current version** of this artifact, including cross-references to resources that use it, can be found [here](http://packages2.fhir.org/xig/resource/ch.fhir.ig.ch-term%7Ccurrent/ValueSet/DocumentEntry.healthcareFacilityTypeCode) via the XIG (Cross-IG) index for FHIR specifications. 

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "DocumentEntry.healthcareFacilityTypeCode",
  "meta" : {
    "lastUpdated" : "2025-12-01T15:44:33Z",
    "source" : "https://art-decor.org/fhir/4.0/ch-epr-",
    "profile" : ["http://hl7.org/fhir/StructureDefinition/shareablevalueset"]
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2024-10-02T17:55:16+01:00"
      }
    }
  ],
  "url" : "http://fhir.ch/ig/ch-term/ValueSet/DocumentEntry.healthcareFacilityTypeCode",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:2.16.756.5.30.1.127.3.10.1.11"
    }
  ],
  "version" : "3.3.0",
  "name" : "DocumentEntryHealthcareFacilityTypeCode",
  "title" : "DocumentEntry.healthcareFacilityTypeCode",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-01T15:44:33+01:00",
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
    },
    {
      "name" : "HL7 Switzerland",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.hl7.ch/",
          "use" : "work"
        }
      ]
    }
  ],
  "description" : "Type of healthcare facility as per Annex 3; EPRO-FDHA.       This code describes the type of healthcare facility in which the document was compiled during the treatment process. In conjunction with the authorisation control, the patient can use this information to assign all documents from a specific type of healthcare facility to a specific confidentiality level in their rights and attributes, for example.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "immutable" : false,
  "copyright" : "This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org.",
  "compose" : {
    "include" : [
      {
        "system" : "http://snomed.info/sct",
        "concept" : [
          {
            "code" : "722171005",
            "display" : "Diagnostic institution (environment)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Diagnostische Einrichtung"
              },
              {
                "language" : "fr-CH",
                "value" : "institut diagnostic"
              },
              {
                "language" : "it-CH",
                "value" : "istituto diagnostica"
              },
              {
                "language" : "en-US",
                "value" : "Diagnostic institution"
              },
              {
                "language" : "rm-CH",
                "value" : "instituziun diagnostica"
              }
            ]
          },
          {
            "code" : "225728007",
            "display" : "Accident and Emergency department (environment)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Notfall- und Rettungsdienste"
              },
              {
                "language" : "fr-CH",
                "value" : "service d'urgence et de sauvetage"
              },
              {
                "language" : "it-CH",
                "value" : "servizio di pronto soccorso e di salvataggio"
              },
              {
                "language" : "en-US",
                "value" : "Accident and Emergency department"
              },
              {
                "language" : "rm-CH",
                "value" : "servetsch d'urgenza e da salvament"
              }
            ]
          },
          {
            "code" : "394747008",
            "display" : "Health Authority (qualifier value)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gesundheitsbehörde"
              },
              {
                "language" : "fr-CH",
                "value" : "autorité sanitaire"
              },
              {
                "language" : "it-CH",
                "value" : "autorità sanitaria"
              },
              {
                "language" : "en-US",
                "value" : "Health Authority"
              },
              {
                "language" : "rm-CH",
                "value" : "autoritad da sanadad"
              }
            ]
          },
          {
            "code" : "66280005",
            "display" : "Private home-based care (environment)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Organisation für Pflege zu Hause"
              },
              {
                "language" : "fr-CH",
                "value" : "soins à domicile"
              },
              {
                "language" : "it-CH",
                "value" : "servizio di assistenza e cura a domicilio"
              },
              {
                "language" : "en-US",
                "value" : "Private home-based care"
              },
              {
                "language" : "rm-CH",
                "value" : "organisaziun per la tgira a chasa"
              }
            ]
          },
          {
            "code" : "22232009",
            "display" : "Hospital (environment)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Spital"
              },
              {
                "language" : "fr-CH",
                "value" : "hôpital"
              },
              {
                "language" : "it-CH",
                "value" : "ospedale"
              },
              {
                "language" : "en-US",
                "value" : "Hospital"
              },
              {
                "language" : "rm-CH",
                "value" : "ospital"
              }
            ]
          },
          {
            "code" : "722172003",
            "display" : "Military health institution (environment)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Armeeärztliche Dienste"
              },
              {
                "language" : "fr-CH",
                "value" : "service sanitaire de l'armée"
              },
              {
                "language" : "it-CH",
                "value" : "servizio di medicina militare"
              },
              {
                "language" : "en-US",
                "value" : "Military health institution"
              },
              {
                "language" : "rm-CH",
                "value" : "servetsch da medischina militara"
              }
            ]
          },
          {
            "code" : "722173008",
            "display" : "Prison based care site (environment)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Gesundheitseinrichtung in der Haftanstalt"
              },
              {
                "language" : "fr-CH",
                "value" : "service de santé en milieu carcéral"
              },
              {
                "language" : "it-CH",
                "value" : "struttura sanitaria in uno stabilimento carcerario"
              },
              {
                "language" : "en-US",
                "value" : "Prison based care site"
              },
              {
                "language" : "rm-CH",
                "value" : "structura da sanadad en in stabiliment giudizial"
              }
            ]
          },
          {
            "code" : "42665001",
            "display" : "Nursing home (environment)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Pflegeheim"
              },
              {
                "language" : "fr-CH",
                "value" : "etablissement médico-social"
              },
              {
                "language" : "it-CH",
                "value" : "casa di cura"
              },
              {
                "language" : "en-US",
                "value" : "Nursing home"
              },
              {
                "language" : "rm-CH",
                "value" : "chasa da tgira"
              }
            ]
          },
          {
            "code" : "264372000",
            "display" : "Pharmacy (environment)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Apotheke"
              },
              {
                "language" : "fr-CH",
                "value" : "pharmacie"
              },
              {
                "language" : "it-CH",
                "value" : "farmacia"
              },
              {
                "language" : "en-US",
                "value" : "Pharmacy"
              },
              {
                "language" : "rm-CH",
                "value" : "apoteca"
              }
            ]
          },
          {
            "code" : "35971002",
            "display" : "Ambulatory care site (environment)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Ambulante Einrichtung"
              },
              {
                "language" : "fr-CH",
                "value" : "etablissement ambulatoire"
              },
              {
                "language" : "it-CH",
                "value" : "struttura ambulatoriale"
              },
              {
                "language" : "en-US",
                "value" : "Ambulatory care site"
              },
              {
                "language" : "rm-CH",
                "value" : "instituziun ambulanta"
              }
            ]
          },
          {
            "code" : "80522000",
            "display" : "Rehabilitation hospital (environment)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Organisation für stationäre Rehabilitation"
              },
              {
                "language" : "fr-CH",
                "value" : "réadaptation stationnaire"
              },
              {
                "language" : "it-CH",
                "value" : "istituto di riabilitazione stazionaria"
              },
              {
                "language" : "en-US",
                "value" : "Rehabilitation hospital"
              },
              {
                "language" : "rm-CH",
                "value" : "institut da reabilitaziun staziunara"
              }
            ]
          },
          {
            "code" : "394778007",
            "display" : "Client's or patient's home (environment)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Domizil des Patienten"
              },
              {
                "language" : "fr-CH",
                "value" : "domicile du patient"
              },
              {
                "language" : "it-CH",
                "value" : "domicilio del paziente"
              },
              {
                "language" : "en-US",
                "value" : "Client's or patient's home"
              },
              {
                "language" : "rm-CH",
                "value" : "domicil dal pazient"
              }
            ]
          },
          {
            "code" : "288565001",
            "display" : "Medical center (environment)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Medizinisches Zentrum"
              },
              {
                "language" : "fr-CH",
                "value" : "centre médical"
              },
              {
                "language" : "it-CH",
                "value" : "centro medico"
              },
              {
                "language" : "en-US",
                "value" : "Medical center"
              },
              {
                "language" : "rm-CH",
                "value" : "center medicinal"
              }
            ]
          },
          {
            "code" : "264358009",
            "display" : "General practice premises (environment)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "General practice premises"
              },
              {
                "language" : "de-CH",
                "value" : "Arztpraxis"
              },
              {
                "language" : "fr-CH",
                "value" : "cabinet médical"
              },
              {
                "language" : "it-CH",
                "value" : "studio medico"
              },
              {
                "language" : "rm-CH",
                "value" : "pratica da medi"
              }
            ]
          },
          {
            "code" : "43741000",
            "display" : "Site of care (environment)",
            "designation" : [
              {
                "language" : "de-CH",
                "value" : "Andere Gesundheitsorganisation"
              },
              {
                "language" : "de-CH",
                "value" : "Behandlungsort"
              },
              {
                "language" : "fr-CH",
                "value" : "autres prestataires de soins"
              },
              {
                "language" : "fr-CH",
                "value" : "lieu de traitement"
              },
              {
                "language" : "it-CH",
                "value" : "altre organizzazioni sanitarie"
              },
              {
                "language" : "it-CH",
                "value" : "luogo di trattamento"
              },
              {
                "language" : "en-US",
                "value" : "Other site of care"
              },
              {
                "language" : "en-US",
                "value" : "Site of care"
              },
              {
                "language" : "rm-CH",
                "value" : "autras organisaziuns dals fatgs da tgira"
              }
            ]
          },
          {
            "code" : "91154008",
            "display" : "Free-standing birthing center (environment)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Birthing center"
              },
              {
                "language" : "de-CH",
                "value" : "Geburtshaus"
              },
              {
                "language" : "fr-CH",
                "value" : "maison de naissance"
              },
              {
                "language" : "it-CH",
                "value" : "casa di nascita"
              },
              {
                "language" : "rm-CH",
                "value" : "chasa da parturir"
              }
            ]
          },
          {
            "code" : "22201008",
            "display" : "Free-standing dental clinic (environment)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Dental practice"
              },
              {
                "language" : "de-CH",
                "value" : "Zahnarztpraxis"
              },
              {
                "language" : "fr-CH",
                "value" : "cabinet dentaire"
              },
              {
                "language" : "it-CH",
                "value" : "studio dentistico"
              },
              {
                "language" : "rm-CH",
                "value" : "pratica da dentist"
              }
            ]
          },
          {
            "code" : "1332138002",
            "display" : "Telemedicine center (environment)",
            "designation" : [
              {
                "language" : "en-US",
                "value" : "Telemedicine center"
              },
              {
                "language" : "de-CH",
                "value" : "Telemedizinische Einrichtung"
              },
              {
                "language" : "fr-CH",
                "value" : "institut de télémédecine"
              },
              {
                "language" : "it-CH",
                "value" : "centro di telemedicina"
              },
              {
                "language" : "rm-CH",
                "value" : "instituziun da telemedischina"
              }
            ]
          }
        ]
      }
    ]
  }
}

```
