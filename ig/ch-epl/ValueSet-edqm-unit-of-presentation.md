# EDQM - Unit of Presentation - CH EPL (R5) v1.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EDQM - Unit of Presentation**

## ValueSet: EDQM - Unit of Presentation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-epl/ValueSet/edqm-unit-of-presentation | *Version*:1.0.0 |
| Active as of 2025-12-11 | *Computable Name*:EdqmUnitOfPresentationVS |
| *Other Identifiers:*urn:ietf:rfc:3986#Uniform Resource Identifier (URI)#http://standardterms.edqm.eu (use: official, ) | |
| **Copyright/Legal**: CC0-1.0 | |

 
Value Set for the Unit of Presentation from EDQM used by SMC 

 **References** 

* [CH IDMP ManufacturedItemDefinition](StructureDefinition-ch-idmp-manufactureditemdefinition.md)

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
  "id" : "edqm-unit-of-presentation",
  "url" : "http://fhir.ch/ig/ch-epl/ValueSet/edqm-unit-of-presentation",
  "identifier" : [
    {
      "use" : "official",
      "system" : "urn:ietf:rfc:3986",
      "value" : "http://standardterms.edqm.eu"
    }
  ],
  "version" : "1.0.0",
  "name" : "EdqmUnitOfPresentationVS",
  "title" : "EDQM - Unit of Presentation",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-12-11T12:35:50+00:00",
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
  "description" : "Value Set for the Unit of Presentation from EDQM used by SMC",
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
            "code" : "15001000",
            "display" : "Actuation"
          },
          {
            "code" : "15002000",
            "display" : "Ampoule"
          },
          {
            "code" : "15004000",
            "display" : "Applicator"
          },
          {
            "code" : "15005000",
            "display" : "Bag"
          },
          {
            "code" : "15006000",
            "display" : "Barrel"
          },
          {
            "code" : "15007000",
            "display" : "Blister"
          },
          {
            "code" : "15008000",
            "display" : "Block"
          },
          {
            "code" : "15009000",
            "display" : "Bottle"
          },
          {
            "code" : "15011000",
            "display" : "Cachet"
          },
          {
            "code" : "15012000",
            "display" : "Capsule"
          },
          {
            "code" : "15013000",
            "display" : "Cartridge"
          },
          {
            "code" : "15024000",
            "display" : "Chewing gum"
          },
          {
            "code" : "15015000",
            "display" : "Collar"
          },
          {
            "code" : "15016000",
            "display" : "Container"
          },
          {
            "code" : "15017000",
            "display" : "Cup"
          },
          {
            "code" : "15018000",
            "display" : "Cylinder"
          },
          {
            "code" : "15019000",
            "display" : "Dart"
          },
          {
            "code" : "15021000",
            "display" : "Dressing"
          },
          {
            "code" : "15022000",
            "display" : "Drop"
          },
          {
            "code" : "15023000",
            "display" : "Film"
          },
          {
            "code" : "15025000",
            "display" : "Implant"
          },
          {
            "code" : "15026000",
            "display" : "Inhaler"
          },
          {
            "code" : "15027000",
            "display" : "Insert"
          },
          {
            "code" : "15028000",
            "display" : "Jar"
          },
          {
            "code" : "15029000",
            "display" : "Lozenge"
          },
          {
            "code" : "15030000",
            "display" : "Lyophilisate"
          },
          {
            "code" : "15031000",
            "display" : "Matrix"
          },
          {
            "code" : "15033000",
            "display" : "Pad"
          },
          {
            "code" : "15034000",
            "display" : "Paper"
          },
          {
            "code" : "15035000",
            "display" : "Pastille"
          },
          {
            "code" : "15036000",
            "display" : "Patch"
          },
          {
            "code" : "15037000",
            "display" : "Pen"
          },
          {
            "code" : "15038000",
            "display" : "Pendant"
          },
          {
            "code" : "15039000",
            "display" : "Pessary"
          },
          {
            "code" : "15040000",
            "display" : "Pillule"
          },
          {
            "code" : "15041000",
            "display" : "Pipette"
          },
          {
            "code" : "15042000",
            "display" : "Plaster"
          },
          {
            "code" : "15043000",
            "display" : "Plug"
          },
          {
            "code" : "15044000",
            "display" : "Pouch"
          },
          {
            "code" : "15061000",
            "display" : "Puff"
          },
          {
            "code" : "15045000",
            "display" : "Sachet"
          },
          {
            "code" : "15046000",
            "display" : "Sponge"
          },
          {
            "code" : "15047000",
            "display" : "Spoonful"
          },
          {
            "code" : "15048000",
            "display" : "Stick"
          },
          {
            "code" : "15049000",
            "display" : "Straw"
          },
          {
            "code" : "15050000",
            "display" : "Strip"
          },
          {
            "code" : "15051000",
            "display" : "Suppository"
          },
          {
            "code" : "15062000",
            "display" : "Swab"
          },
          {
            "code" : "15052000",
            "display" : "Syringe"
          },
          {
            "code" : "15053000",
            "display" : "System"
          },
          {
            "code" : "15054000",
            "display" : "Tablet"
          },
          {
            "code" : "15055000",
            "display" : "Tag"
          },
          {
            "code" : "15056000",
            "display" : "Tampon"
          },
          {
            "code" : "15057000",
            "display" : "Thread"
          },
          {
            "code" : "15058000",
            "display" : "Tube"
          },
          {
            "code" : "15059000",
            "display" : "Vessel"
          },
          {
            "code" : "15060000",
            "display" : "Vial"
          }
        ]
      }
    ]
  }
}

```
