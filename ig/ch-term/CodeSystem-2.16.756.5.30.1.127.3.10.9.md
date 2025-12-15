# ch-ehealth-codesystem-hpd - CH Term (R4) v3.3.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ch-ehealth-codesystem-hpd**

## CodeSystem: ch-ehealth-codesystem-hpd 

| | |
| :--- | :--- |
| *Official URL*:urn:oid:2.16.756.5.30.1.127.3.10.9 | *Version*:3.3.0 |
| Active as of 2025-12-15 | *Computable Name*:ChEhealthCodesystemHpd |
| **Copyright/Legal**: This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org. | |

 
HCProfessional.hcProfession 

 This Code system is referenced in the content logical definition of the following value sets: 

* [HCProfessionalHcProfession](ValueSet-HCProfessional.hcProfession.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "2.16.756.5.30.1.127.3.10.9",
  "meta" : {
    "source" : "https://art-decor.org/fhir/ValueSet/2.16.756.5.30.1.127.3.10.8.1--20220626154804"
  },
  "extension" : [
    {
      "url" : "http://hl7.org/fhir/StructureDefinition/resource-effectivePeriod",
      "valuePeriod" : {
        "start" : "2022-06-26T15:48:04+02:00"
      }
    }
  ],
  "url" : "urn:oid:2.16.756.5.30.1.127.3.10.9",
  "version" : "3.3.0",
  "name" : "ChEhealthCodesystemHpd",
  "title" : "ch-ehealth-codesystem-hpd",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-15T10:47:47+00:00",
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
  "description" : "HCProfessional.hcProfession",
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
  "copyright" : "This artefact includes content from SNOMED Clinical Terms® (SNOMED CT®) which is copyright of the International Health Terminology Standards Development Organisation (IHTSDO). Implementers of these artefacts must have the appropriate SNOMED CT Affiliate license - for more information contact http://www.snomed.org/snomed-ct/getsnomed-ct or info@snomed.org.",
  "caseSensitive" : true,
  "content" : "complete",
  "concept" : [
    {
      "code" : "00000",
      "display" : "Other",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Andere"
        },
        {
          "language" : "fr-CH",
          "value" : "autre"
        },
        {
          "language" : "it-CH",
          "value" : "altro"
        },
        {
          "language" : "rm-CH",
          "value" : "auter"
        },
        {
          "language" : "en-US",
          "value" : "Other"
        }
      ]
    },
    {
      "code" : "00100",
      "display" : "Aktivierungsfachfrau/Aktivierungsfachmann",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Fachperson für Aktivierung"
        },
        {
          "language" : "fr-CH",
          "value" : "spécialiste de l'activation"
        },
        {
          "language" : "it-CH",
          "value" : "specialista in attivazione"
        },
        {
          "language" : "rm-CH",
          "value" : "spezialist(-a) d'activaziun"
        },
        {
          "language" : "en-US",
          "value" : "Activation therapy specialist"
        }
      ]
    },
    {
      "code" : "00200",
      "display" : "Optician",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Optiker/Optikerin"
        },
        {
          "language" : "fr-CH",
          "value" : "opticien(ne)"
        },
        {
          "language" : "it-CH",
          "value" : "ottico(-a)"
        },
        {
          "language" : "rm-CH",
          "value" : "opticra/opticher"
        },
        {
          "language" : "en-US",
          "value" : "Optician"
        }
      ]
    },
    {
      "code" : "00300",
      "display" : "Biomedizinische Analytikerin/Biomedizinischer Analytiker",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Biomedizinischer Analytiker/Biomedizinische Analytikerin"
        },
        {
          "language" : "fr-CH",
          "value" : "technicien(ne) en analyses biomédicales"
        },
        {
          "language" : "it-CH",
          "value" : "tecnico(-a) in analisi biomediche"
        },
        {
          "language" : "rm-CH",
          "value" : "analiticra biomedicinala/analiticher biomedicinal"
        },
        {
          "language" : "en-US",
          "value" : "Biomedical analyst"
        }
      ]
    },
    {
      "code" : "00400",
      "display" : "Dental hygienist",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Dentalhygieniker/Dentalhygienikerin"
        },
        {
          "language" : "fr-CH",
          "value" : "hygiéniste dentaire"
        },
        {
          "language" : "it-CH",
          "value" : "igienista dentale"
        },
        {
          "language" : "rm-CH",
          "value" : "igienicra/igienicher da dents"
        },
        {
          "language" : "en-US",
          "value" : "Dental hygienist"
        }
      ]
    },
    {
      "code" : "00500",
      "display" : "Drogist/Drogistin",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Drogist/Drogistin"
        },
        {
          "language" : "fr-CH",
          "value" : "droguiste"
        },
        {
          "language" : "it-CH",
          "value" : "droghiere(-a)"
        },
        {
          "language" : "rm-CH",
          "value" : "droghist(-a)"
        },
        {
          "language" : "en-US",
          "value" : "Druggist"
        }
      ]
    },
    {
      "code" : "00600",
      "display" : "Fachfrau für medizinisch-technische Radiologie/Fachmann für medizinisch-technische Radiologie",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Fachperson für medizinisch-technische Radiologie"
        },
        {
          "language" : "fr-CH",
          "value" : "technicien(ne) en radiologie médicale"
        },
        {
          "language" : "it-CH",
          "value" : "tecnico(-a) di radiologia medica"
        },
        {
          "language" : "rm-CH",
          "value" : "spezialist(-a) da tecnica da radiologia medicinala"
        },
        {
          "language" : "en-US",
          "value" : "Medical-technical radiology assistant"
        }
      ]
    },
    {
      "code" : "00700",
      "display" : "Fachfrau Gesundheit/Fachmann Gesundheit",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Fachperson Gesundheit"
        },
        {
          "language" : "fr-CH",
          "value" : "assistant(e) en soins et santé communautaire"
        },
        {
          "language" : "it-CH",
          "value" : "operatore(-trice) sociosanitario"
        },
        {
          "language" : "rm-CH",
          "value" : "spezialist(-a) da sanadad"
        },
        {
          "language" : "en-US",
          "value" : "Healthcare assistant"
        }
      ]
    },
    {
      "code" : "00800",
      "display" : "Fachfrau Operationstechnik/Fachmann Operationstechnik",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Fachperson Operationstechnik"
        },
        {
          "language" : "fr-CH",
          "value" : "technicien(ne) en salle d'opération"
        },
        {
          "language" : "it-CH",
          "value" : "tecnico(-a) di sala operatoria"
        },
        {
          "language" : "rm-CH",
          "value" : "Spezialist(-as) da tecnica d'operaziun"
        },
        {
          "language" : "en-US",
          "value" : "Operating room technician"
        }
      ]
    },
    {
      "code" : "00900",
      "display" : "Medizinische Masseurin/Medizinischer Masseur",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Medizinischer Masseur/Medizinische Masseurin"
        },
        {
          "language" : "fr-CH",
          "value" : "masseur(-euse) médical"
        },
        {
          "language" : "it-CH",
          "value" : "massaggiatore(-trice) medicale"
        },
        {
          "language" : "rm-CH",
          "value" : "massadra medicinala/massader medicinal"
        },
        {
          "language" : "en-US",
          "value" : "Medical masseur"
        }
      ]
    },
    {
      "code" : "01000",
      "display" : "Naturheilpraktikerin/Naturheilpraktiker",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Naturheilpraktiker/Naturheilpraktikerin"
        },
        {
          "language" : "fr-CH",
          "value" : "naturopathe"
        },
        {
          "language" : "it-CH",
          "value" : "naturopata"
        },
        {
          "language" : "rm-CH",
          "value" : "naturopat(-a)"
        },
        {
          "language" : "en-US",
          "value" : "Naturopathic practitioner"
        }
      ]
    },
    {
      "code" : "01100",
      "display" : "Optometrist",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Optometrist/Optometristin"
        },
        {
          "language" : "fr-CH",
          "value" : "optométriste"
        },
        {
          "language" : "it-CH",
          "value" : "optometrista"
        },
        {
          "language" : "rm-CH",
          "value" : "optometrist(-a)"
        },
        {
          "language" : "en-US",
          "value" : "Optometrist"
        }
      ]
    },
    {
      "code" : "01200",
      "display" : "Orthoptist",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Orthoptist/Orthoptistin"
        },
        {
          "language" : "fr-CH",
          "value" : "orthoptiste"
        },
        {
          "language" : "it-CH",
          "value" : "ortottista"
        },
        {
          "language" : "rm-CH",
          "value" : "ortoptist(-a)"
        },
        {
          "language" : "en-US",
          "value" : "orthoptist"
        }
      ]
    },
    {
      "code" : "01300",
      "display" : "Osteopath",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Osteopath/Osteopathin"
        },
        {
          "language" : "fr-CH",
          "value" : "ostéopathe"
        },
        {
          "language" : "it-CH",
          "value" : "osteopata"
        },
        {
          "language" : "rm-CH",
          "value" : "osteopat(-a)"
        },
        {
          "language" : "en-US",
          "value" : "Osteopath"
        }
      ]
    },
    {
      "code" : "01400",
      "display" : "Podologin/Podologe",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Podologe/Podologin"
        },
        {
          "language" : "fr-CH",
          "value" : "podologue"
        },
        {
          "language" : "it-CH",
          "value" : "podologo(-a)"
        },
        {
          "language" : "rm-CH",
          "value" : "podolog(-a)"
        },
        {
          "language" : "en-US",
          "value" : "Podiatrist"
        }
      ]
    },
    {
      "code" : "01500",
      "display" : "Rettungssanitäterin/Rettungssanitäter",
      "designation" : [
        {
          "language" : "de-CH",
          "value" : "Rettungssanitäter/Rettungssanitäterin"
        },
        {
          "language" : "fr-CH",
          "value" : "ambulancier(-ère)"
        },
        {
          "language" : "it-CH",
          "value" : "soccorritore(-trice)"
        },
        {
          "language" : "rm-CH",
          "value" : "sanitari(-a) da salvament"
        },
        {
          "language" : "en-US",
          "value" : "Paramedic"
        }
      ]
    }
  ]
}

```
