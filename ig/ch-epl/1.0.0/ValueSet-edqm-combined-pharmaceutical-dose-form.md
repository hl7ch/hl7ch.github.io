# EDQM - Combined Pharmaceutical Dose Form - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EDQM - Combined Pharmaceutical Dose Form**

## ValueSet: EDQM - Combined Pharmaceutical Dose Form 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/ValueSet/edqm-combined-pharmaceutical-dose-form | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:EdqmCombinedPharmaceuticalDoseFormVS |
| *Other Identifiers:*OID:0.4.0.127.0.16.1.1.2.3 (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
Value Set for the Combined Pharmaceutical Dose Froms from EDQM used by SMC 

 **References** 

* Included into [ChSMCAuthorisedPharmaceuticalDoseFormVS](ValueSet-ch-SMC-authorised-pharmaceutical-dose-form.md)
* [IDMP MedicinalProductDefinition](StructureDefinition-ch-idmp-medicinalproductdefinition.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R5/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "edqm-combined-pharmaceutical-dose-form",
  "url" : "http://fhir.ch/ig/ch-epl/ValueSet/edqm-combined-pharmaceutical-dose-form",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "urn:oid:0.4.0.127.0.16.1.1.2.3"
    }
  ],
  "version" : "1.0.0",
  "name" : "EdqmCombinedPharmaceuticalDoseFormVS",
  "title" : "EDQM - Combined Pharmaceutical Dose Form",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-11T12:29:57+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "Value Set for the Combined Pharmaceutical Dose Froms from EDQM used by SMC",
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
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "http://standardterms.edqm.eu",
        "concept" : [
          {
            "code" : "50001500",
            "display" : "Concentrate and diluent for solution for infusion"
          },
          {
            "code" : "13086000",
            "display" : "Concentrate and solvent for concentrate for oral spray, suspension"
          },
          {
            "code" : "50002000",
            "display" : "Concentrate and solvent for concentrate for solution for infusion"
          },
          {
            "code" : "50003000",
            "display" : "Concentrate and solvent for cutaneous solution"
          },
          {
            "code" : "50004000",
            "display" : "Concentrate and solvent for cutaneous use"
          },
          {
            "code" : "13143000",
            "display" : "Concentrate and solvent for dispersion for injection"
          },
          {
            "code" : "13153000",
            "display" : "Concentrate and solvent for emulsion for injection"
          },
          {
            "code" : "50005000",
            "display" : "Concentrate and solvent for injection"
          },
          {
            "code" : "13144000",
            "display" : "Concentrate and solvent for intravesical solution"
          },
          {
            "code" : "13160000",
            "display" : "Concentrate and solvent for oral solution"
          },
          {
            "code" : "50006000",
            "display" : "Concentrate and solvent for solution for infusion"
          },
          {
            "code" : "50007000",
            "display" : "Concentrate and solvent for solution for injection"
          },
          {
            "code" : "50007500",
            "display" : "Concentrate and solvent for solution for injection/infusion"
          },
          {
            "code" : "50008000",
            "display" : "Concentrate and solvent for suspension for injection"
          },
          {
            "code" : "10707000",
            "display" : "Ear drops, powder and solvent for suspension"
          },
          {
            "code" : "13157000",
            "display" : "Effervescent granules and suspension for oral suspension"
          },
          {
            "code" : "13119000",
            "display" : "Effervescent powder and powder for oral suspension"
          },
          {
            "code" : "13150000",
            "display" : "Effervescent powder and suspension for oral suspension"
          },
          {
            "code" : "13092000",
            "display" : "Emulsion and lyophilisate for suspension for injection"
          },
          {
            "code" : "50021500",
            "display" : "Emulsion and suspension for emulsion for injection"
          },
          {
            "code" : "11604000",
            "display" : "Endotracheopulmonary instillation, powder and solvent for solution"
          },
          {
            "code" : "11605000",
            "display" : "Endotracheopulmonary instillation, powder and solvent for suspension"
          },
          {
            "code" : "10606000",
            "display" : "Eye drops, powder and solvent for solution"
          },
          {
            "code" : "10607000",
            "display" : "Eye drops, powder and solvent for suspension"
          },
          {
            "code" : "12109500",
            "display" : "Fibrin sealant-powder and solvent for fibrin sealant"
          },
          {
            "code" : "50078000",
            "display" : "Gas and solvent for dispersion for injection/infusion"
          },
          {
            "code" : "13138000",
            "display" : "Gastro-resistant powder and solvent for oral suspension"
          },
          {
            "code" : "50026500",
            "display" : "Granules and solvent for oral suspension"
          },
          {
            "code" : "50027000",
            "display" : "Granules and solvent for suspension for injection"
          },
          {
            "code" : "13117000",
            "display" : "Lyophilisate and solvent for emulsion for injection"
          },
          {
            "code" : "13088000",
            "display" : "Lyophilisate and solvent for oculonasal suspension"
          },
          {
            "code" : "13093000",
            "display" : "Lyophilisate and solvent for oral suspension"
          },
          {
            "code" : "11214500",
            "display" : "Lyophilisate and solvent for solution for injection"
          },
          {
            "code" : "50034500",
            "display" : "Lyophilisate and solvent for suspension for injection"
          },
          {
            "code" : "11214700",
            "display" : "Lyophilisate and suspension for suspension for injection"
          },
          {
            "code" : "10800500",
            "display" : "Nasal drops, lyophilisate and solvent for suspension"
          },
          {
            "code" : "50047650",
            "display" : "Nasal drops, powder and solvent for solution"
          },
          {
            "code" : "13097000",
            "display" : "Nasal spray, lyophilisate and solvent for suspension"
          },
          {
            "code" : "50041200",
            "display" : "Powder and gel for gel"
          },
          {
            "code" : "13101000",
            "display" : "Powder and solution for bee-hive dispersion"
          },
          {
            "code" : "13081000",
            "display" : "Powder and solution for bee-hive solution"
          },
          {
            "code" : "10412000",
            "display" : "Powder and solution for dental cement"
          },
          {
            "code" : "50041500",
            "display" : "Powder and solution for solution for injection"
          },
          {
            "code" : "13121000",
            "display" : "Powder and solution for suspension for injection"
          },
          {
            "code" : "50042000",
            "display" : "Powder and solvent for concentrate for solution for infusion"
          },
          {
            "code" : "50044000",
            "display" : "Powder and solvent for cutaneous solution"
          },
          {
            "code" : "50071000",
            "display" : "Powder and solvent for dental gel"
          },
          {
            "code" : "50044500",
            "display" : "Powder and solvent for dispersion for injection"
          },
          {
            "code" : "50044700",
            "display" : "Powder and solvent for emulsion for injection"
          },
          {
            "code" : "11702000",
            "display" : "Powder and solvent for endocervical gel"
          },
          {
            "code" : "50045000",
            "display" : "Powder and solvent for endosinusial solution"
          },
          {
            "code" : "50045500",
            "display" : "Powder and solvent for epilesional solution"
          },
          {
            "code" : "50046000",
            "display" : "Powder and solvent for gingival gel"
          },
          {
            "code" : "11304000",
            "display" : "Powder and solvent for implantation paste"
          },
          {
            "code" : "50047000",
            "display" : "Powder and solvent for intraocular instillation solution"
          },
          {
            "code" : "50047500",
            "display" : "Powder and solvent for intravesical solution"
          },
          {
            "code" : "50047600",
            "display" : "Powder and solvent for intravesical suspension"
          },
          {
            "code" : "50047700",
            "display" : "Powder and solvent for nebuliser solution"
          },
          {
            "code" : "10114000",
            "display" : "Powder and solvent for oral solution"
          },
          {
            "code" : "10115000",
            "display" : "Powder and solvent for oral suspension"
          },
          {
            "code" : "50048000",
            "display" : "Powder and solvent for prolonged-release suspension for injection"
          },
          {
            "code" : "12116000",
            "display" : "Powder and solvent for sealant"
          },
          {
            "code" : "11214000",
            "display" : "Powder and solvent for solution for infusion"
          },
          {
            "code" : "11207000",
            "display" : "Powder and solvent for solution for injection"
          },
          {
            "code" : "50080000",
            "display" : "Powder and solvent for solution for injection/infusion"
          },
          {
            "code" : "50048270",
            "display" : "Powder and solvent for solution for injection/skin-prick test"
          },
          {
            "code" : "11208000",
            "display" : "Powder and solvent for suspension for injection"
          },
          {
            "code" : "10115500",
            "display" : "Powder and solvent for syrup"
          },
          {
            "code" : "50048500",
            "display" : "Powder and suspension for suspension for injection"
          },
          {
            "code" : "13062000",
            "display" : "Powder for concentrate and solution for solution for infusion"
          },
          {
            "code" : "50048600",
            "display" : "Powder, dispersion and solvent for concentrate for dispersion for infusion"
          },
          {
            "code" : "50055350",
            "display" : "Powder, solvent and matrix for implantation matrix"
          },
          {
            "code" : "50062000",
            "display" : "Suspension and effervescent granules for oral suspension"
          },
          {
            "code" : "50062500",
            "display" : "Suspension and solution for spray"
          },
          {
            "code" : "50062750",
            "display" : "Suspension and solvent for suspension for injection"
          },
          {
            "code" : "50065000",
            "display" : "Tablet and powder for oral solution"
          },
          {
            "code" : "50064000",
            "display" : "Tablet and solvent for rectal suspension"
          }
        ]
      }
    ]
  }
}

```
